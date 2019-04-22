<?php
function menuMulti( $data , $parent_id = 0, $str = '---| ' ,  $select = 0 ){
	foreach ($data as $value) {
		$id = $value->id;
		$name = $value->name;
		if ( $value->parent_id ==  $parent_id ){
			if( $select != 0  && $id == $select ){
				echo '<option value='.$id.' selected> '. $str . $value->name .' </option>';
			}else {
				echo '<option value='.$id.'> '. $str . $value->name .' </option>';
			}
			menuMulti( $data , $id , $str . '---|  ' , $select );
		}
	}
}
function listCate($data, $parent_id = 0, $str = '' ){
	foreach ($data as $value) {
		$id = $value->id;
		$name = $value->name;
		if ( $value->parent_id ==  $parent_id ) {
			if($str == ''){
				$strName = '<b>'.$str.$name.'</b>';
			}else {
				
				$strName = $str.$name;
			}
            echo '<tr class="odd">';
            echo '<td><input type="checkbox" name="chkItem[]" value="'.$id.'"></td>';
            echo '<td><a class="text-default" href="'.route('backend.product.category.getEdit', $id).'" title="Sửa">'.$strName.'</a></td>';
            echo '<td><a class="text-default" href="'.route('backend.product.category.getEdit', $id).'" title="Sửa">  '.count($value->get_child_cate()) ?: '_'.' </a>
                    </td>';
           	echo ' <td><div><a href="'.route('backend.product.category.getEdit', $id ).'" title="Sửa"> <i class="fa fa-pencil fa-fw"></i> Sửa</a> &nbsp; &nbsp; &nbsp;
                            <a class="text-danger" href="'.route('backend.product.category.getDelete', $id).'" onclick="return confirm(\'Bạn có chắc chắn xóa không ?\')" title="Xóa"> <i class="fa fa-trash-o fa-fw"></i> Xóa</a></div></td>';
            echo '</tr>';
            
            listCate( $data , $id , $str . '---| ');
		}
	}
}


/* Hiển thị danh mục con cách 2 */
function cate_parent($data, $parent = 0, $str = '---| ', $select = 0)
{
    foreach ($data as $val) {
        $id = $val['id'];
        $name = $val['name'];
        $parent_id = $val['parent_id'];
        if (!is_array($select)) {
            $select[0] = $select;
        }
        if ($parent_id === $parent) {
            if (!in_array(0, $select) && in_array($id, $select)) {
                echo "<option value='$id' selected='selected'>$str $name</option>";
            } else {
                echo "<option value='$id'>$str $name</option>";
            }
            cate_parent($data, $id, $str . '---| ', $select);
        }

    }
}



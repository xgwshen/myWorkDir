	function cer($field, $value, $fieldinfo) {
		$_value = string2array(str_replace('&quot;', '"', $value));
		extract($fieldinfo);
		$setting = string2array($setting);
		$size = $setting['size'];
		$type = $ispassword ? 'password' : 'text';
		$errortips = $this->fields[$field]['errortips'];
		if($errortips || $minlength) $this->formValidator .= '$("#'.$field.'").formValidator({onshow:"",onfocus:"'.$errortips.'"}).inputValidator({min:1,onerror:"'.$errortips.'"});';
		return '
		等级A：<input type="text" name="info['.$field.'][level][1]" id="'.$field.'" size="'.$size.'" value="'.$_value[1]['level'].'" class="input-text" '.$formattribute.' '.$css.'> 
		价格：<input type="text" name="info['.$field.'][price][1]" id="'.$field.'" size="'.$size.'" value="'.$_value[1]['price'].'" class="input-text" '.$formattribute.' '.$css.'><br><br>
		等级B：<input type="text" name="info['.$field.'][level][2]" id="'.$field.'" size="'.$size.'" value="'.$_value[2]['level'].'" class="input-text" '.$formattribute.' '.$css.'> 
		价格：<input type="text" name="info['.$field.'][price][2]" id="'.$field.'" size="'.$size.'" value="'.$_value[2]['price'].'" class="input-text" '.$formattribute.' '.$css.'><br><br>
		等级C：<input type="text" name="info['.$field.'][level][3]" id="'.$field.'" size="'.$size.'" value="'.$_value[3]['level'].'" class="input-text" '.$formattribute.' '.$css.'> 
		价格：<input type="text" name="info['.$field.'][price][3]" id="'.$field.'" size="'.$size.'" value="'.$_value[3]['price'].'" class="input-text" '.$formattribute.' '.$css.'><br><br>
		等级C：<input type="text" name="info['.$field.'][level][4]" id="'.$field.'" size="'.$size.'" value="'.$_value[4]['level'].'" class="input-text" '.$formattribute.' '.$css.'> 
		价格：<input type="text" name="info['.$field.'][price][4]" id="'.$field.'" size="'.$size.'" value="'.$_value[4]['price'].'" class="input-text" '.$formattribute.' '.$css.'>';
	}

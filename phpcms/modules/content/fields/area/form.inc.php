	function area($field, $value, $fieldinfo) {
		$option = array('请选择地区','北京','四川','江苏','上海','广东','山东','河北','浙江','陕西','安徽','重庆','湖北','河南','福建','天津','湖南','山西','江西','广西','辽宁','贵州','黑龙江','云南','甘肃','吉林','内蒙古','青海','海南','宁夏','新疆','西藏');	
		$string = form::select($option,$value,"name='info[$field]' id='$field' $fieldinfo[formattribute]");
		return $string;
	}

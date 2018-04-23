	function cer($field, $value) {
		$data = array();
		foreach($value['level'] as $k=>$v){
			if($v){
				$data[$k]['level'] = $v;
				$data[$k]['price'] = $value['price'][$k];
			}
		}
		$result = array2string($data);
		return $result;
		
	}

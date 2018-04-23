function Zh(){
	this.url=(window.location.pathname).toLowerCase();	
	this.urlKey={};
	this.scrollFlag=true;
	//轮播图变量
	this.index=0;
	this.timer=null;
	this.bannerObj=null;
	this.objHover=null;
	
	//信息横屏滚动变量
	this.info={};
	this.info.guide=null;
	this.info.main=null;
	this.info.page=0;
	
	//验证码标识
	this._code_flag=0;
	
	//表单验证
	this.reg={
		'mail':/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/,
		'tel':/^1[3|4|5|8][0-9]\d{4,8}$/,
        'tel_log':/^1[0-9]{10}$/,
		'qq':/^[1-9]\d{4,14}$/,
		'name':/^[\u0391-\uFFE5\w]+$/,
		'num':/^[0-9]\d{0,5}$/,
		'price':/^[5-9]{1}|[1-9][0-9]{1}|[1-9][0-9]{2}|[1][0-9]{3}|2000$/,
		'pass':/^[A-Za-z0-9]{6,16}$/,
		'phone':/^\d{3,4}(--?|-?|\(?)\d{7,8}\)?$/,
		'repass':"repass",
		'info':"info",
		'select':"select",
		'file':"file", 
	};
	
	//城市选择
	this.cities={
		"北京市":new Array('北京'),
		"上海市":new Array('上海'),
		"天津市":new Array('天津'),
		"重庆市":new Array('重庆'),
		"河北省":new Array('石家庄'),
		"山西省":new Array('太原'),
		"辽宁省":new Array('沈阳'),
		"吉林省":new Array('长春'),
		"黑龙江省":new Array('哈尔滨'),
		"江苏省":new Array('南京'),
		"浙江省":new Array('杭州'),
		"安徽省":new Array('合肥'),
		"福建省":new Array('福州'),
		"江西省":new Array('南昌'),
		"山东省":new Array('济南'),
		"河南省":new Array('郑州'),
		"湖北省":new Array('武汉'),
		"湖南省":new Array('长沙'),
		"广东省":new Array('广州'),
		"海南省":new Array('海口'),
		"四川省":new Array('成都'),
		"贵州省":new Array('贵阳'),
		"云南省":new Array('昆明'),
		"陕西省":new Array('西安'),
		"甘肃省":new Array('兰州'),
		"青海省":new Array('西宁'),
		"内蒙古自治区":new Array('呼和浩特'),
		"广西壮族自治区":new Array('南宁'),
		"西藏自治区":new Array('拉萨'),
		"宁夏回族自治区":new Array('银川'),
		"新疆维吾尔自治区":new Array('乌鲁木齐'),	
		}
	}

Zh.prototype={
	
	constructor:Zh,
	
	//截取地址栏关键字
	subUrl:function(str,start,end){
		var key=str.substring(str.indexOf(start)+1,str.indexOf(end));
		key=key.replace(/[0-9]/g,"");
		key=key.replace(/\-/g,"");
		key=key.replace(/\s/g,"");
		return key;
		},
	//标题，段落长度截取
	subString:function(obj,len){
            var i;
            for(i=0;i<obj.length;i++){
                if(obj.eq(i).text().length>len){
                    var txt=obj.eq(i).text().substr(0,len)+"...";	
                    obj.eq(i).text(txt);
                }
            }
		},
	//选项卡样式交互	
	changeTab:function(obj,active,index){
		if(index>=0){
			obj.eq(index).addClass(active).siblings().removeClass(active);
			}else{	
			obj.addClass(active).siblings().removeClass(active);	
				}
		},	
	//轮播图添加悬停按钮
	addHover:function(){
			var i;
			for(i=0;i<this.bannerObj.length;i++){
				this.objHover.append('<a href="javascript:void(0);"></a>');
				}
			this.objHover.children("a").eq(0).addClass("active");
		},
	//轮播图交互
	showImg:function(){
			this.changeTab(this.objHover.children("a").eq(this.index),"active");
			this.bannerObj.eq(this.index).stop().fadeIn(1000).siblings().stop().fadeOut(1000);	
		},
	//轮播图播放
	playImg:function(){
		if(this.index>=this.bannerObj.length-1){	
			this.index=0;
			}else{
			this.index++;	
				}
			return this.showImg();	
		},
	
	//信息横屏滚动
	playInfo:function(){
		var main=this.info.main;
		var len=main.children("div").length
		var width=main.children("div").width();
		main.width(width*len);
					
		this.info.guide.click(function(){
	
			var left=main.css("left");
			var count=Math.abs(parseInt(left)/width);
			if(!main.is(":animated")){
				var dire=$(this).hasClass("left");
				switch(dire){
					case false:
						if(count<len-1){
							main.animate({"left":"-="+width});	
						}else{
							main.animate({"left":"0"});
						}
					break;
					case true:
						if(count<1){
							main.animate({"left":"-="+width*(len-1)});	
						}else{
							main.animate({"left":"+="+width});	
						}
					break;
				}	
			}
		});
	},
	
	//加载JS
	loadScript:function(url){
		var script=document.createElement("script");
		script.type='text/javascript';
		script.src=url;
		script.reload="1";
		document.body.appendChild(script);
		},	
	
	//表单验证
	regForm:function($obj){
		
		var flag=true;
		var $thisInput=null;
		
		this.cancelWaring($obj);
		
		for(var i=0;i<$obj.length;i++){				
			
			$thisInput=$obj.eq(i);
			var typeName=$thisInput.attr("type");	
			this._addRequired($thisInput,"required",typeName);
				
			var name=$obj.eq(i).attr("class");
			name=name.split(" ");
            
			if($thisInput.hasClass("required")){
				switch (name[1]){
					case "name":
						if(!this._regInput($thisInput,"姓名格式错误",this.reg.name)){
							flag=false;
							}
						break;
					case "qq":
						if(!this._regInput($thisInput,"QQ格式错误",this.reg.qq)){
							flag=false;
							}
						break;
					case "mail":
						if(!this._regInput($thisInput,"邮箱格式错误",this.reg.mail)){
							flag=false;
							}
						break;
					case "tel":
						if(!this._regInput($thisInput,"手机格式错误",this.reg.tel)){
							flag=false;
							}
						break;
					case "phone":
						if(!this._regInput($thisInput,"固话格式错误",this.reg.phone)){
							flag=false;
							}
						break;	
					case "num":
						if(!this._regInput($thisInput,"只能填写数字",this.reg.num)){
							flag=false;
							}
						break;
                    case "price":
                        if(!this._regInput($thisInput,"请输入5-2000内的整数",this.reg.price,800,2000)){
                            flag=false;
                            }
						break;
					case "pass":
						if(!this._regInput($thisInput,"密码在6-16位之间，只能是数字或字母",this.reg.pass)){
							flag=false;
							}
						break;
					case "repass":
						if(!this._regInput($thisInput,"两次录入密码不一致",this.reg.repass)){
							flag=false;
							}
						break;	
					case "info":
						if(!this._regInput($thisInput,"该信息不能为空",this.reg.info,0,20,true)){
							flag=false;
							}
						break;
					case "txt":
						if(!this._regInput($thisInput,"该信息不能为空",this.reg.info,0,200,false)){
							flag=false;
							}
						break;
                    case "txt-yj":
						if(!this._regInput($thisInput,"请输入10-200字内的内容",this.reg.info,10,200,true,true)){
							flag=false;
							}
						break;
                    case "title":
                    if(!this._regInput($thisInput,"请输入5-30字内的标题",this.reg.info,5,30,true,true)){
                        flag=false;
                        }
						break;
					case "select":
						if(!this._regInput($thisInput,"未选择",this.reg.select)){
							flag=false;
						}
						break;
					case "file":
						if(!this._regInput($thisInput,"未选择",this.reg.file)){
							flag=false;
						}
						break;	
					default:
						break;
				}	
			}
		}

		return flag; 
	},
	
	//验证表单控件
	_regInput:function($obj,txt,regExp,minL,len,flag,tab){
		
		switch (regExp){
			case "info":
				switch (flag){
					case true:
                        if(tab){
                            if($obj.val().length==""){
                                $obj.val(txt).addClass("waring");
                                return false;
                            }else if($obj.val().length>len || $obj.val().length<minL){
                                $obj.val("请填写"+minL+"-"+len+"字内的标题").addClass("waring");
                                return false;
                            }else if($obj.hasClass("waring")){
                                return false;
                            }else{
                                return true;
                            }
                        }else{
                            if($obj.val().length==""){
                                $obj.val(txt).addClass("waring");
                                return false;
                            }else if($obj.val().length>len){
                                $obj.val("字数过长，请控制在"+len+"字以内").addClass("waring");
                                return false;
                            }else if($obj.hasClass("waring")){
                                return false;
                            }else{
                                return true;
                            }
                        }
						break;
					case false:
						if($obj.val().length==""){
							$obj.next("span.waring").remove();
							$obj.addClass("waring").after("<span class='waring'>"+txt+"</span>");
							return false;
						}else if($obj.val().length>len){
							$obj.next("span.waring").remove();
							$obj.addClass("waring").after("<span class='waring'>信息字数控制在"+len+"字以内</span>");
							return false;
						}else if($obj.hasClass("waring")){
							return false;
						}else{
							return true;
						}
						break;
					default:
						break;
				}	
				break;
            case "price":
				if($obj.val().length>len || $obj.val().length<minL){
                    $obj.val("请输入大于"+minL+"小于"+len+"的整数").addClass("waring");
                    return false;
                }else if($obj.hasClass("waring")){
                    return false;
                }else{
                    return true;
                }
				break;
			case "select":
				if($obj.val()==0){
					$obj.addClass("waring");
					return false;
				}else{
					return true;
				}
				break;
			case "file":
				if($obj.val()==""){
					$obj.next("span.waring").remove();
					$obj.addClass("waring").after("<span class='waring'>请上传证件图片</span>");
					return false;
				}else{
					return true;
				}
				break;
			
			case "repass":
				if($obj.val()!=$(".pass").val()){
					if($obj.attr("type")=="password"){
						$obj.attr("type","text");
						}
					$obj.val(txt).addClass("waring");
					return false;
				}else{
					return true;
				}
				break;
			
			default:
				if(!regExp.test($obj.val())||$obj.val().length>30){
						if($obj.attr("type")=="password"){
							$obj.attr("type","text");
							}
						$obj.val(txt).addClass("waring");
						return false;
					}else{
						return true;
					}
				break;
		}
	},
   
	//非必填项目交互
	_addRequired:function($obj,className,type){
		var flag=true;
		if($obj.val().length>0&&!$obj.hasClass(className)){
		switch(type){
			case"text":
				$obj.addClass(className);
				$obj.focus(function(){
					if($obj.hasClass(className)){
						$obj.removeClass(className);		
					}		
				});
			break;	
			}
		}
	},
	
	//waring交互
	cancelWaring:function($obj){
		$obj.focus(function(){
			if($(this).hasClass("waring")){
				var isTxt=$(this).hasClass("txt")||$(this).hasClass("select")||$(this).hasClass("file");
				var isPass=$(this).hasClass("pass")||$(this).hasClass("repass")||$(this).hasClass("old_pass");
				if($(this).attr("type")=="text"&&isPass){
					$(this).attr("type","password");
					}
				switch (isTxt){
					case true:
						$(this).removeClass("waring");
						$(this).next("span.waring").remove();
						break;
					case false:
						$(this).val("").removeClass("waring");		
						break;
					default:
						break;
					}
				}
			});
		},
    //验证码
	verifyCode:function(url,param,$this_btn){		

		if(!$this_btn.hasClass("push")){
			$.post(url,param,function(r){
					switch(r.result) {
						case true:
							Zh.prototype._pushCode($this_btn);		
						break;
						case false:
							var msg = r.msg.phone ? r.msg.phone : r.msg; 
							$this_btn.siblings("input[type='text']").val(msg).addClass("waring");
							Zh.prototype.cancelWaring($this_btn.siblings("input[type='text']"));	
						break;
				   }
			   },'json');
			}
		},
    //登录注册  表单验证
	regFormP:function($obj){
		
		var flag=true;
		var $thisInput=null;
		
		this.cancelWaringP($obj);
		
		for(var i=0;i<$obj.length;i++){				
			
			$thisInput=$obj.eq(i);
			var typeName=$thisInput.attr("type");	
			this._addRequired($thisInput,"required",typeName);
				
			var name=$obj.eq(i).attr("class");
			name=name.split(" ");
            
			if($thisInput.hasClass("required")){
				switch (name[1]){
					case "name":
						if(!this._regInputP($thisInput,"姓名格式错误",this.reg.name)){
							flag=false;
							}
						break;
					case "qq":
						if(!this._regInputP($thisInput,"QQ格式错误",this.reg.qq)){
							flag=false;
							}
						break;
					case "mail":
						if(!this._regInputP($thisInput,"邮箱格式错误",this.reg.mail)){
							flag=false;
							}
						break;
                    case "tel":
						if(!this._regInputP($thisInput,"手机格式错误",this.reg.tel)){
							flag=false;
							}
						break;
					case "tel_log":
						if(!this._regInputP($thisInput,"手机格式错误",this.reg.tel_log)){
							flag=false;
							}
						break;
					case "num":
						if(!this._regInputP($thisInput,"只能填写数字",this.reg.num)){
							flag=false;
							}
						break;
					case "pass":
						if(!this._regInputP($thisInput,"密码在6-16位之间，只能是数字或字母",this.reg.pass)){
							flag=false;
							}
						break;
					case "repass":
						if(!this._regInputP($thisInput,"两次录入密码不一致",this.reg.repass)){
							flag=false;
							}
						break;	
					case "info":
						if(!this._regInputP($thisInput,"验证码不能为空",this.reg.info,20,true)){
							flag=false;
							}
						break;
					case "txt":
						if(!this._regInputP($thisInput,"该信息不能为空",this.reg.info,200,false)){
							flag=false;
							}
						break;
					default:
						break;
				}	
			}
		}

		return flag; 
	},
	//登录注册 验证表单控件
	_regInputP:function($obj,txt,regExp,len,flag){
		
		switch (regExp){
			case "info":
				switch (flag){
					case true:
						if($obj.val().length==""){
							$obj.addClass("waringP");
                            $('.lx_login .message').show();
                            $('.lx_login .message').html(txt);
							return false;
						}else if($obj.val().length>len){
							$obj.addClass("waringP");
                            $('.lx_login .message').show();
                            $('.lx_login .message').html("字数过长，请控制在"+len+"字以内");
							return false;
						}else if($obj.hasClass("waringP")){
							return false;
						}else{
							return true;
						}
						break;
					case false:
						if($obj.val().length==""){
							$obj.next("span.waringP").remove();
                            $obj.addClass("waringP");
                            $('.lx_login .message').show();
                            $('.lx_login .message').html(txt);
							return false;
						}else if($obj.val().length>len){
							$obj.next("span.waringP").remove();
                            $obj.addClass("waringP");
                            $('.lx_login .message').show();
                            $('.lx_login .message').html("信息字数控制在"+len+"字以内");
							return false;
						}else if($obj.hasClass("waringP")){
							return false;
						}else{
							return true;
						}
						break;
					default:
						break;
				}	
				break;
			
			case "repass":
				if($obj.val()!=$(".pass").val()){
                        $obj.addClass("waringP");
                        $('.lx_login .message').show();
                        $('.lx_login .message').html(txt);
					return false;
				}else{
					return true;
				}
				break;
			
			default:
				if(!regExp.test($obj.val())||$obj.val().length>30){
						if($obj.attr("type")=="password"){
							$obj.attr("type","text");
							}
                        $obj.addClass("waringP");
                        $('.lx_login .message').show();
                        $('.lx_login .message').html(txt);
						return false;
					}else{
						return true;
					}
				break;
		}
	},
	//登录注册 waring交互
	cancelWaringP:function($obj){
		$obj.focus(function(){
			if($(this).hasClass("waringP")){
				var isTxt=$(this).hasClass("txt")||$(this).hasClass("select")||$(this).hasClass("file");
				var isPass=$(this).hasClass("pass")||$(this).hasClass("repass")||$(this).hasClass("old_pass");
				if($(this).attr("type")=="text"&&isPass){
					$(this).attr("type","password");
					}
				switch (isTxt){
					case true:
						$(this).removeClass("waringP");
						$('.lx_login .message').hide();
						break;
					case false:
						$(this).val("").removeClass("waringP");
                        $('.lx_login .message').hide();
						break;
					default:
						break;
					}
				}
			});
		},
	
    //登录注册 验证码
	verifyCodeP:function(url,param,$this_btn){		

		if(!$this_btn.hasClass("push")){
			$.post(url,param,function(r){
					switch(r.result) {
						case true:
							Zh.prototype._pushCode($this_btn);		
						break;
						case false:
							var msg = r.msg.phone ? r.msg.phone : r.msg; 
							$this_btn.siblings("input[type='text']").addClass("waringP");
                            $('.lx_login .message').show();
                            $('.lx_login .message').html(msg);
							Zh.prototype.cancelWaringP($this_btn.siblings("input[type='text']"));	
						break;
				   }
			   },'json');
			}
		},
	
	//验证码倒计时
	_pushCode:function(obj){
		obj.addClass("push").val("已发送");	
	    var i=60;
	    var push_interval=setInterval(function(){
			obj.val("已发送"+i+"s")
			i--;
		   },1000);
		setTimeout(function(){
			clearInterval(push_interval);
			obj.removeClass("push").val("免费获取短信验证码");	
			},60000);
		},
    //图片验证码
    verifyCodeImg:function(obj){
        $.get('/data/captcha',{refresh:''},function(data){
            var evaldata=eval(data);
            obj.attr('src',evaldata.url);
        });
    },
	
	//城市选择
	set_city:function($province, city){
		
		var pv, cv;
		var i, ii;

		pv=$province.find("option:selected").text();
		cv=city.value;
		city.length=1;
					
		if($province.val()==0){
			city.options[0].text = "选择城市";	
			city.options[0].value = 0;
			return;
		} 
		
		if(typeof(this.cities[pv])=='undefined') return;
		
		for(i=0; i<this.cities[pv].length; i++){
			ii = i;
			city.options[ii] = new Option();
			city.options[ii].text = this.cities[pv][i];	
			city.options[ii].value = this.cities[pv][i];
		}
	},
	
	//ajaxSelect
	ajaxSelect:function(url,param,$city,val){
		switch(param.parent_id==0){
			case true:
				$city.html("<option value='0'>"+val+"</option>");
			break;
			case false:
				$.get(url,param,function(data){
					$city.html("<option value='0'>"+val+"</option>");
					var j=0;
					var arrCity=[];
					for (var i in data){
						$city.append("<option value='"+i+"'>"+data[i]+"</option>");
						arrCity[j]=i;
						j++;
					}
//					$city.val(arrCity[0]);
				},'json');	
			break;	
		}
	},
	//ajaxCer
	ajaxCer:function(url,param,$city,val){
		switch(param.parent_id==0){
			case true:
				$city.html("<a href='javascript:' data-id="+val+"></a>");
			break;
			case false:
				$.get(url,param,function(data){
//					$city.html("<a href='javascript:' data-value="+val+"></a>");
					var j=0;
					var arrCity=[];
					for (var i in data){
						$city.append("<a href='javascript:' data-id="+i+">"+data[i]+"</a>");
						arrCity[j]=i;
						j++;
					}
					$city.val(arrCity[0]);
				},'json');	
			break;	
		}
	},
	
	//导航下拉菜单样式
	siteMenu:function($obj,flag){
		switch(flag){
			case 1:
				$obj.find("dl").each(function(){
				var max_len=0;
				$(this).find("a").each(function(){
				if($(this).index()%2!=0){
					var width=($(this).text().length+$(this).prev("a").text().length)*12+40;
					//console.log(width+"-"+$(this).index()+"-"+$(this).text());
					if(width>max_len){
						max_len=width;
					}
					}
				});
				$(this).find("dd").css("width",max_len+5);
				});
			break;	
			
			case 0:
				$obj.find("dd").css("width","690px");
			break;
			}			
		},
		
		
	//成功跳转
	successAction:function($obj,url,message1,message2,message3){
		$obj.html("<h2>"+message1+"</h2><p>"+message3+"</p><p><span id='wait'>3</span>秒钟后跳转到"+message2+"</p>");
		var num=parseInt($("#wait").text());
		setTimeout(function(){
			if(num>0){
				num--;	
				$("#wait").text(num);
				setTimeout(arguments.callee,1000);
			}else{
				window.location.href=url;
                //window.open(url,'_blank');
			}
		},1000);
	},
    //成功跳转
	/*successAction1:function($obj,url,message1,message2){
		$obj.html("<h2>"+message1+"</h2><p><span id='wait'>3</span>秒钟后跳转到"+message2+"</p>");
		var num=parseInt($("#wait").text());
		setTimeout(function(){
			if(num>0){
				num--;	
				$("#wait").text(num);
				setTimeout(arguments.callee,1000);
			}else{
				window.location.href=url;
			}
		},1000);
	},*/
	
	//倒计时
	getRTime:function(val,$obj){		
		setTimeout(function(){
			//2位数，前面加个0
			function PrefixInteger(num,length) {
			    return (Array(length).join('0') + num).slice(-length);
			}
      		var EndTime= new Date(val);
       		var NowTime = new Date();
       		var t =EndTime.getTime() - NowTime.getTime(); 	
       		if(t>0){
		       	   var d=Math.floor(t/1000/60/60/24);
			       var h=Math.floor(t/1000/60/60%24);
			       var m=Math.floor(t/1000/60%60);
			       var s=Math.floor(t/1000%60);
			       
			       d = PrefixInteger(d,2);
					h = PrefixInteger(h,2);
					m = PrefixInteger(m,2);
					s = PrefixInteger(s,2);
			
			       $obj.find(".t_d").text(d);
			       $obj.find(".t_h").text(h);
			       $obj.find(".t_m").text(m);
			       $obj.find(".t_s").text(s);		
		       
		       setTimeout(arguments.callee,50);
		       
		       }	
       },0);
	},
	
	//转换时间戳yy-mm-dd:h:m
	getLocalTime:function(ns) {     
    		var date = new Date(parseInt(ns) * 1000);
			var Y = date.getFullYear() + '-';
			var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
			var D = date.getDate() + ' ';
			var h = date.getHours() + ':';
			var m = date.getMinutes();
			//var s = date.getSeconds(); 
			//console.log(Y+M+D+h+m+s);
			return (Y+M+D+h+m);
		},
    //立即举报
    Report:function(url,param,dialog,zzc){
        $.post(url,param,function(data){
            switch(data.result){
                case true:
                    alert("举报成功");
                    dialog.fadeOut();
                    zzc.css("display","none");

                break;
                case false:
                    alert("您已举报过！");
                    dialog.fadeOut();
                    zzc.css("display","none");
                break;
            }
        },'json');
    },
    //收藏
    Collect:function(obj,dialog,zzc){
        
        var url=obj.attr('data-url');
            var data={
                type:obj.attr('data-type'),
                favor_id:obj.attr('data-favor_id'),
            };
            
            $.get(obj.attr('data-url'),data,function(res){
                switch(res.result){
                    case true:
                        dialog.fadeIn(1000);
                            zzc.css({
                                        opacity:0.3,
                                        display:"block"
                                    });
                        var url= window.location.href;
                        Zh.prototype.successAction(dialog,url,"收藏成功！","当前");
                        obj.val('已收藏').attr('disabled');
                        
                    break;
                    case false:
                        if(res.msg=='请先登录'){
                            var url=res.url;
                            dialog.fadeIn(1000);
                            zzc.css({
                                        opacity:0.3,
                                        display:"block"
                                    });
                            Zh.prototype.successAction(dialog,url,res.msg,"登录前的");
                        }
                        if(res.msg=='您已收藏'){
                            dialog.fadeIn(1000);
                            zzc.css({
                                        opacity:0.3,
                                        display:"block"
                                    });
                            var url= window.location.href;
                            Zh.prototype.successAction(dialog,url,"您已收藏过","当前");
                           
                        }
                        return false;
                    break;
                }
            },'json');
    },
    ScrollTop:function(box,height,top,speed,lazy,time){
        setTimeout(function(){
            var can=true;
            box.innerHTML+=box.innerHTML;
            box.onmouseover=function(){can=false};
            box.onmouseout=function(){can=true};
            new function (){
             var stop=box.scrollTop%height==0&&!can;
             if(!stop)box.scrollTop==parseInt(box.scrollHeight/2)?box.scrollTop=top:box.scrollTop++;
             setTimeout(arguments.callee,box.scrollTop%height?speed:lazy);
            };
        },time)
    }
}
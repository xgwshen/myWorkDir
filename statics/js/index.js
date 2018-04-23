$(document).ready(function(e){

	var zh=new Zh();
	/*低版本浏览器支持palceholder*/
	if($('input, textarea').length>0){
		if (/msie [6|7|8|9]/i.test(navigator.userAgent)){
			$('input, textarea').placeholder();
		};
	}
	
	/*顶部搜索交互*/
	if($(".header-list-search").length>0){
		$(".header-list-search>span").on("click",function(){
			$(this).siblings("dl").toggleClass("active");
			$(this).toggleClass("active");
			return false;
		});
        //点击按钮跳转页面
        $('.urlTo').on('change click',function(){
            var sel_f2=$("#search_data").find("option:selected");
            var url=sel_f2.val();
            if(sel_f2){
                window.open(url,'_blank');
            }
        });
	}

	
	(function(){
        //页面返回顶部效果
        $("#shares").click(function() {
           $("html,body").animate({scrollTop:0}, 500);
         });
        /*左侧导航栏交互*/
		var scrollFlag=true;
		$(document).scroll(function(){
			if($(document).scrollTop()>80&&scrollFlag){
				$(".header.index").addClass("active");
				scrollFlag=false;
			}else if($(document).scrollTop()<80&&!scrollFlag){
				$(".header.index").removeClass("active");
				scrollFlag=true;
			}
		});

	})();

	/*头部导航交互 -- 暂时隐藏*/
	if($(".header-list-nav").length>0){

		var menu_index=0;
		var menuArray=[];
		$("a.menu").parent("li").each(function(){
			menuArray[$(this).index()]=menu_index;
			menu_index++;
		});

		var satrt_top=$(".header-menu").css("top");

		$(".header-list-nav a").hover(function(){
			if($(this).hasClass("menu")){
				$(".header-menu").show();
				$(this).addClass("select").siblings().removeClass("select");
				var index=$(this).parent("li").index();
				//console.log(index);
				$(".header-menu>div").eq(menuArray[index]).addClass("active").siblings("div").removeClass("active");
			}
		},function(e){
			if($(this).hasClass("menu")){
				if(!$(e.relatedTarget).hasClass("header-menu-list")){
					$(this).removeClass("select");
					if($(".header-menu").hide()){
						
					}
				}
			}
		});

		$(".header-menu").hover(function(){
				$(this).show();
			},function(){
				$(".header-list-nav a").removeClass("select");
				$(this).hide().css("top",satrt_top);
			});
        //发布需求下拉交互
        $(".head_li_10").hover(function(){	
			$(this).addClass("selected");
			$(this).children(".head_li_ul").stop().slideDown(100);
			},function(){
			var $this_top;
			$this_top=$(this);
			$this_top.removeClass("selected");
			$this_top.children(".head_li_ul").stop().slideUp(100);	
			});
        //行家解读下拉交互
        $(".news").hover(function(){	
        $(this).addClass("selected");
        $(this).children(".head_li_ul").stop().slideDown(100);
        },function(){
        var $this_top;
        $this_top=$(this);
        $this_top.removeClass("selected");
        $this_top.children(".head_li_ul").stop().slideUp(100);	
        });
	}
    //总导航页面顶部导航滚动固定顶部 
	// if($("#menu-box").length > 0 || $("#cer-menu-box").length > 0 || $(".partime").length > 0 || $(".edu_banner").length > 0 || $(".xl_ban_box").length > 0 || $(".news_scroll").length > 0){
 //        $(function(){
 //            $(window).scroll(function() {
 //                $(document).scrollTop() > 1 ? ($(".header").addClass("search_float"), $(".header_top").hide()) : ($(".header").removeClass("search_float"), $(".header_top").show());
 //            });
 //        });
        
 //    }

	/*首页左边业务交互*/
	if($("#menu-box").length > 0){
		/*banner位服务大类目选项卡交互*/
			var $menuClss=$("#menuList>dl");
			var $menuTxt=$("#menuCate_Container>div");
			$menuClss.mouseover(function(){	
					var index=$(this).index();		
					zh.changeTab($menuClss,'select',index);
					$("#menuContainer").show();
					$("#menuCate_Container").show();
					$menuTxt.eq(index).show().siblings().hide();	
				})
						
			$(".menuCateBox").mouseleave(function(e){
					$menuClss.removeClass("select");
					$("#menuCate_Container").hide();
					$("#menuContainer").hide();	
						 
			});	
        
        
	}
    //发布转让求购需求交互
    if($(".menuList").length > 0 || $(".release").length > 0){
        $('.transfer_link').on('click',function(){
                var dialog=$('#dialog');
                var zzc=$('#zzc');
                var message2='<a rel="nofollow" href="http://dbt.zoosnet.net/LR/Chatpre.aspx?id=DBT84865761&cid=1495766315246815440879" target="_blank">咨询在线客服</a>'

                switch(login_property){
                    case "p":
                        var url=window.location.href;
                        dialog.fadeIn(1000);
                        zzc.css({
                                    opacity:0.3,
                                    display:"block"
                                });
                        zh.successAction($('.assage'),url,'',"当前页面");
                        return false;	
                    break;
                case "":
                    $('#dialog').find('p').eq(1).hide(); 
                        var url='/site/login';
                      window.open(url,'_blank');  
                    return false;
                    break;
                case "c":
                    var url=$(this).attr('data-href');
                    window.location.href=url;
                    return true;
                    break;

            }
            });
        $('.transfer_mflink').on('click',function(){
                var dialog=$('#dialog');
                var zzc=$('#zzc');
                var message2='<a rel="nofollow" href="http://dbt.zoosnet.net/LR/Chatpre.aspx?id=DBT84865761&cid=1495766315246815440879" target="_blank">咨询在线客服</a>'

                switch(login_property){
                    case "p":
                        var url=window.location.href;
                        dialog.fadeIn(1000);
                        zzc.css({
                                    opacity:0.3,
                                    display:"block"
                                });
                        zh.successAction($('.assage'),url,'',"当前页面");
                        return false;	
                    break;
                case "":
                    $('#dialog').find('p').eq(1).hide(); 
                        var url='/transfer/apply';
                      window.open(url,'_blank');  
                    return false;
                    break;
                case "c":
                    var url=$(this).attr('data-href');
                    window.location.href=url;
                    return true;
                    break;

            }
            })
    }
    
	//给没有二级分类的一级分类加样式
	$(".box1 dl").each(function(value,index){
		if($(this).children("dd").find("a").length==0){
			$(this).addClass("menu-first");
		}
	})
	//资质许可首页
	if($("#cer-menu-box").length > 0){
		/*banner位服务大类目选项卡交互*/
			var $menuClss=$("#menuList>dl");
			var $menuTxt=$("#menuCate_Container>div");
			$menuClss.mouseover(function(){	
					var index=$(this).index();	
					zh.changeTab($menuClss,'select',index);		
					$("#menuContainer").show();
					$("#menuCate_Container").show();
					$menuTxt.eq(index).show().siblings().hide();
					$(this).prev('dl').children('dd').css('borderBottom','none');
					
				}).mouseout(function(){
					var index=$(this).index();
					$(this).prev('dl').children('dd').css('borderBottom','1px dotted #9a9a9a');
//					$(this).children('dd').css('borderBottom','none');
				})
						
			$(".cer-menuCateBox").mouseleave(function(e){
					$menuClss.removeClass("select");
					$("#menuCate_Container").hide();
					$("#menuContainer").hide();	
						 
			});	
        
        //顶部导航滚动固定顶部 
    /*    $(function(){
            $(window).scroll(function() {
                $(document).scrollTop() > 1 ? ($(".header").addClass("search_float"), $(".header_top").hide()) : ($(".header").removeClass("search_float"), $(".header_top").show());
            });
            //页面返回顶部效果
            $("#shares").click(function() {
               $("html,body").animate({scrollTop:0}, 500);
             }); 
        });*/
			
	}
    
    //顶部交互
	if($("#header_top").length > 0){
        
        /*顶部微信*/
		$("#top_wx,#top_wb").hover(function(){	
			$(this).addClass("selected");
			$(this).children(".top_code").stop().slideDown(100);
			},function(){
			$(this).removeClass("selected");
			$(this).children(".top_code").stop().slideUp(100);	
            });
        
        $("#top_city").hover(function(){	
			$(this).children("span").addClass("selected");
			$(this).children("#top_city_menu").stop().slideDown(100);
			},function(){
			var $this_top;
			$this_top=$(this);
			$this_top.children("span").removeClass("selected");
			$this_top.children("#top_city_menu").stop().slideUp(100);	
			});
        $(".top_map1").hover(function(){	
			$(this).addClass("selected");
			$(this).children(".top_map").stop().slideDown(100);
			},function(){
			var $this_top;
			$this_top=$(this);
			$this_top.removeClass("selected");
			$this_top.children(".top_map").stop().slideUp(100);	
			});
        $(".top_map2").hover(function(){	
			$(this).addClass("selected");
			$(this).children(".top_map").stop().slideDown(100);
			},function(){
			var $this_top;
			$this_top=$(this);
			$this_top.removeClass("selected");
			$this_top.children(".top_map").stop().slideUp(100);	
			});
        $(".top_map3").hover(function(){	
			$(this).addClass("selected");
			$(this).children(".top_map").stop().slideDown(100);
			},function(){
			var $this_top;
			$this_top=$(this);
			$this_top.removeClass("selected");
			$this_top.children(".top_map").stop().slideUp(100);	
			});
        
        /*顶部城市切换*/
		(function(){
           
            $(function(){
                 $.session.remove('top_city');
                var len=$('#top_city_txt').text().length;
                if(len==2){
                    $('#top_city .header_city_txt').css('background-position','15px 8px,62px 15px');
                }
                if(len==3){
                    $('#top_city .header_city_txt').css('background-position','15px 8px,70px 15px');
                }
            })
            
            
               /* var host=window.location.host;
				switch(host){
					case "sjz.lsqifu.com":
						$("#top_city_txt").text("石家庄");		
					break;
					default:
						if($.session.get('top_city')){
							$("#top_city_txt").text($.session.get('top_city'));	
						}else{
							$("#top_city_txt").text("济南");	
						}
					break;
					
					}*/
				
				/*
				$.post("/ajax/common/",{cases:'city'},function(data){
				if(data.result){
					
					var cityArray=[];
					
					$("#top_city_menu>dd>a").each(function() {
                        cityArray.push($(this).text());
                    });
					if($.inArray(data.city,cityArray)>0){
						$("#top_city_txt").text(data.city);	
						}else{
							if(lsw.cities[data.pro]){
								$("#top_city_txt").text(lsw.cities[data.pro][0]);		
								}else{
									$("#top_city_txt").text("济南");		
									}
							}
					}else{
						$("#top_city_txt").text("济南");	
						}
					},'json');		
				*/
				
                
			
			})();
        
        $("#top_city").hover(function(){
			var $cityMenu=$("#top_city_menu");
			$cityMenu.slideDown(100);
			$cityMenu.find("a").not(".branch").click(function(){
                var len=$(this).text().length;
                if(len==2){
                    $('#top_city .header_city_txt').css('background-position','15px 8px,62px 15px');
                }
                if(len==3){
                    $('#top_city .header_city_txt').css('background-position','15px 8px,70px 15px');
                }
                
				$("#top_city_txt").text($(this).text());
				$("#top_tel,#top_tel_silder").text($(this).attr("data-tel"));
				$(this).addClass("active");
				$cityMenu.find("a").not($(this)).removeClass("active");
                $("#top_city_txt").text($(this).text());	
				//$.session.set('top_city',$(this).text());
				});
			},function(){});		
		
		$("#top_city_menu,.logo").mouseleave(function(){			
				$("#top_city_menu").stop().slideUp(100);
			});
        
        /*页面滚动，导航条悬浮*/	
		/*if($(document).scrollTop()>550){
			$("#scroll-nav").show();
			//顾问详情页，预约功能交互
			if($("#adviser_mail").length>0){
				$("#adviser_mail").addClass("top");
				}
			if(lsw.url.indexOf('special')&&$("#cs-nav").length>0){
					$("#cs-nav").find("a").eq(0).css({"margin-left":"100px"});
					$("#scroll-nav").find("dd").html($("#cs-nav").html());
				}
			//服务详情页面，右侧边栏悬浮
				if($(".service-appointment").length>0){
					$("#details_right_box").addClass("top");
					}	
			}*/
        
    };
	
	/*网站主页轮播*/
	if($(".banner-list-main").length>0&&!$(".banner-list-main").hasClass("list")){
		(function(){
			/*banner轮播图交互*/
			zh.index=0;
			zh.bannerObj=$("#banner-img-01>li");
			zh.objHover=$("#banner-hover-01>li");
			//加载悬停按钮
			zh.addHover();
			//显示首张图片
			zh.bannerObj.eq(0).show();
			//轮播自动加载
			var autoImg=function(){
				zh.timer=setTimeout(function(){
						zh.playImg();
						zh.timer=setTimeout(arguments.callee,4000);
					},4000);
			}
	
			autoImg();
	
			//按钮悬停交互
			$("#banner-hover-01>li>a").hover(function(e){
				e.stopPropagation();
				zh.index=$(this).index();
				zh.showImg();
			},function(){});
	
			//轮播图主体交互
			$(".banner-list-main").on("mouseover mousemove",function(){
				clearTimeout(zh.timer);
			}).mouseleave(function(){
				autoImg();
			});
	
			//左右导航按钮
			$(".banner-guide").click(function(){
				var dire=$(this).hasClass("left");
				switch(dire){
					case true:
						zh.index=zh.index-1;
						if(zh.index<0){
							zh.index=zh.bannerObj.length-1;
						}
						zh.showImg();
					break;
	
					case false:
					    zh.index=zh.index+1;
					    if(zh.index>zh.bannerObj.length-1){
						   zh.index=0;
						}
					    zh.showImg();
					break;
				}
			});	
			
		})();
		
	}
	
	if($(".edu-main").length>0){
			var zh2=new Zh();
			/*banner轮播图交互*/
			zh2.index=0;
			zh2.bannerObj=$("#banner-img-02>li");
			zh2.objHover=$("#banner-hover-02>li");
			//加载悬停按钮
			zh2.addHover();
			//显示首张图片
			zh2.bannerObj.eq(0).show();
			//轮播自动加载
			var autoImg2=function(){
				zh2.timer=setTimeout(function(){
						zh2.playImg();
						zh2.timer=setTimeout(arguments.callee,4000);
					},4000);
			}
	
			autoImg2();
	
			//按钮悬停交互
			$("#banner-hover-02>li>a").hover(function(e){
				e.stopPropagation();
				zh2.index=$(this).index();
				zh2.showImg();
			},function(){});
	
			//轮播图主体交互
			$(".edu-img").on("mouseover mousemove",function(){
				clearTimeout(zh2.timer);
			}).mouseleave(function(){
				autoImg2();
			});
	}
	

	/*主页通知公告选项卡*/
	if($(".banner-notice").length>0){
		$(".banner-notice>dt>a").click(function(){
			var index=$(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".banner-notice>dd>div").eq(index).addClass("active").siblings().removeClass("active");
		});
	};
    /*页面底部悬浮*/
    if($(".float_botBox").length>0){
        $('.close').click(function(){
            $('.float_botBox').slideUp(500);
        })
    }
	/*证书估价交互*/
	if($("#expect-btn").length>0){
		$("#expect-btn").click(function(){
			$(".shade-box").show();
			$(".shade-content").css("width",$(".banner-list-price").width());
			$("a.shade-close").click(function(){
				$(".shade-box").hide();
			});

			$(".shade-box").click(function(e){
				if($(e.target).attr("class")=="shade-box"){
					$(this).hide();
				}
			});
		});
	}
    /*用户中心删除确认*/
	if($(".qy_wrapper").length>0){
        $('#del').on('click',function(){
            confirm('你确定要删除吗？');
        })
        $('.company_oprate_p').on('change',function(){
            var flag=$(this).find("option:selected").val();
            if(flag=='删除'){
                confirm('你确定要删除吗？');
            }
        })
    }
	/*资质许可专区，服务词条排列*/
	if($("div.service-list").length>0){
		/*
		$("div.service-list").each(function(){
			var width=0;
			var isLast=0;
			$(this).find("a").not(".service-down").each(function(){
				//console.log($(this).width()+"--"+$(this).text());
				if($(this).width()>width&&$(this).width()<100){
					width=$(this).width();
					isLast=isNaN($(this).next().text());
				}
			});
			
			switch(isLast){
				case true:
					//$(this).find("dd").width((width+24)*2);		
				break;
								
				case false:
					//$(this).find("dd").width((width)*2);		
				break;
			}
			
			//console.log((width)*2);
			//console.log("--------------------------");
		});*/
		
		$(".service-list").each(function(){
			if($(this).find("a").length>9){
				$(this).addClass("active");
				$(this).find(".service-down").addClass("active");
			}
		});
		//三屏滚动效果
		$(".section-index-box").slide({titCell:".section-index-bar ul",mainCell:".bd .section-index-service",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4,scroll:4,trigger:"click",delayTime:1000,interTime:5000});
	}

	/*资质许可专区，信息横屏轮播*/
	if($(".forum-main").length>0){
		zh.info.main=$(".forum-main");
		zh.info.guide=$(".forum-guide");
		zh.playInfo();
	}
	/*修改建筑培训页面轮播点击一个一个切换
	if($('.edu_section').length >0){
		jQuery(".edu_scrolleft").slide({mainCell:".forum-edu .forum-box",autoPage:true,effect:"left",autoPlay:false,vis:4,trigger:"click"});

		$('.edu_scrolleft').mouseover(function(){
			$('.edu_hd').show();
		}).mouseout(function(){
			$('.edu_hd').hide();
		})
	}
	*/

	/*中心侧边栏列表*/
	if($(".person-sider-list").length>0){

		$(".person-sider-list").find("dt").each(function(){
			if($(this).next("dd").length>0){
				$(this).addClass("sider-cate");
			}
		});

		if($(".person-sider-list.user").length>0 || $(".person-sider-list.company").length>0){
			$(".sider-cate").click(function(){
				$(this).toggleClass("active").siblings().removeClass("active");
				$(this).next("dd").slideToggle(200);
				$(this).siblings().next("dd").slideUp(200);
				return false;
			});
		}
	}

	/*个人中心-简历操作*/
	if($(".center-operation").length>0){

		$(".center-operation>a").click(function(){
			var operate=$(this).text();
			var $this_a=$(this);
			switch(operate){
				case "刷新":
					$.post($(this).attr("href"),{
						'id':$(this).attr("data-id"),
						'_csrf':$("#_csrf").val(),
					},function(data){
						if(data.result){
							$this_a.parents("tr").find(".update_time").text(zh.getLocalTime(data.new_time));
						}
					},'json');
					return false;
				break;

				case "删除":
					$.post($(this).attr("href"),{
						'id':$(this).attr("data-id"),
						'_csrf':$("#_csrf").val(),
					},function(data){
						if(data.result==1){
							$this_a.parents("tr").remove();
						}
					},'json');
					return false;
				break;

				case "设为默认":
					$.post($(this).attr("href"),{
						'id':$(this).attr("data-id"),
						'_csrf':$("#_csrf").val(),
					},function(data){
						if(data.result){
							$this_a.text("√已默认").addClass("active");
							$this_a.parents("tr").siblings("tr").find(".set_default").text("设为默认").removeClass("active");
						}
					},'json');
					return false;
				break;

				case "√已默认":
					return false;
				break;

				default:
					return true;
				break;
			}
			//return false;
		});
	}

	/*表单验证*/
	if($(".list-input-form").length>0){
		if(!$(".person-list,.iqy_r_menu,.addTransfer,.addNeed").length>0){
			$(".list-input-txt").not(".select").val("");
			$("#publish-per").val("");
		}
        
		$(document).on("click","input[type='submit']",function(){
			var $this_input=$(this).parents("form").find(".list-input-txt");
			var $price_box=$(this).parents(".banner-list-price").find(".list-price-box");
			var $result_box=$(this).parents(".banner-list-price").find(".list-result-box");
			var btn_type=$(this).attr("class");
			btn_type=btn_type.split(" ");

			var url=$(this).parents("form").attr("action");
			var data=$(this).parents("form").serialize();
			switch (btn_type[1]){
				case "price":
					if(zh.regForm($this_input)){
						$.post(url,data,function(res){
							switch(res.result){
								case true:
									$price_box.removeClass("active");
									$result_box.addClass("active");
									$result_box.find("span").eq(0).text(res.data.price ? res.data.price+"元/年" : "暂无" );
									$result_box.find("span").eq(1).text(res.data.period ? res.data.period : "暂无");
								break;
								case false:
									//console.log(res);
								break;
								}
							},'json');
						}
					return false;
					break;
				case "expect":
					if(zh.regForm($this_input)){
						$.post(url,data,function(res){
							if(res){
								$price_box.removeClass("active");
								$result_box.addClass("active");
								$result_box.find("span").eq(0).text(res.price1);
								$result_box.find("span").eq(1).text(res.price2);
								}
							},'json');
						}
					return false;
				break;
                case "expectP":
					if(zh.regForm($this_input)){
						var this_btn=$(this);
						$.post(url,data,function(res){
							switch(res.result){
							case true:
								$price_box.removeClass("active");
								$result_box.addClass("active");
								$result_box.find("span").eq(0).text(res.price1);
								$result_box.find("span").eq(1).text(res.price2);
							break;
							
							case false:
								if(res.msg.phone){
									this_btn.parents("form").find(".tel").val(res.msg.phone).addClass("waring");
									zh.cancelWaring(this_btn.parents("form").find(".tel"));
								}
								if(res.msg.password){
									this_btn.parents("form").find(".pass").attr("type","text").val(res.msg.password).addClass("waring");
									zh.cancelWaring(this_btn.parents("form").find(".pass"));
								}
								if(res.msg.verifyCode){
									this_btn.parents("form").find("input[name='verifyCode']").val(res.msg.verifyCode).addClass("waring");
									zh.cancelWaring(this_btn.parents("form").find("input[name='verifyCode']"));
								}
							break;
							}
						},'json');
						}
					return false;
				break;
                case "examine":
                    if(zh.regForm($this_input)){
                        var this_btn=$(this);
                        $.post(url,data,function(res){
                            if(res.result){
                                  this_btn.parents("form").find(".name").val('');
                                  this_btn.parents("form").find(".info").val('');
                                  this_btn.parents("form").find(".tel").val('');
                                $("#dialog").fadeIn(1000);
                                zh.successAction($("#dialog"),this_btn.attr("data-url"),"提交","人才培养页面");
                                };
                                
                            },'json');
                        }
					return false;
				break;
                case "sub-apply":
                if(zh.regForm($this_input)){
                    var this_btn=$(this);
                    $.post(url,data,function(res){
                        if(res.result){
                            $("#dialog").fadeIn(1000);
                            zh.successAction($("#dialog"),this_btn.attr("data-url"),"提交成功！","工作人员将尽快与您联系，请耐心等待！");
                            };

                        },'json');
                    }
                return false;
				break;
                case "post_report":
                    if(zh.regForm($this_input)){
                        var this_btn=$(this);
                        var url1=window.location.href;
                        $.post(url,data,function(res){
                            if(res.result){
                                $("#dialog").fadeIn(1000);
                                $("#zzc").css({
                                        opacity:0.3,
                                        display:"block"
                                    });
                                zh.successAction($("#dialog"),url1,"提交成功！","工作人员会尽快与您沟通联系！");
                                };

                            },'json');
                        }
                    return false;
				break;
                 case "sub_trans":
                    if(zh.regForm($this_input)){
                        var this_btn=$(this);
                        var url1=window.location.href;
                         var data={
                            mobile:$(this).parents('.input-phone').find('#tell').val(),
                            transfer_id:$(this).attr('data-transfer-id')
                        };
                        $.post(url,data,function(res){
                            if(res.result){
                                $("#float_dialog").fadeIn(1000);
                                $("#float_zzc").css({
                                        opacity:0.3,
                                        display:"block"
                                    });
                                zh.successAction($("#float_dialog"),url1,"提交成功！","当前页面","手机号提交成功，稍后请留意工作人员的来电。");
                                };

                            },'json');
                        }
                    return false;
				break;
				case "edu_signup":
                    if(zh.regForm($this_input)){
                        var this_btn=$(this);
                        $.post(url,data,function(res){
                            if(res.result){
                                  window.location.href=this_btn.attr("data-url");
                                };
                                
                            },'json');
                        }
					return false;
				break;
				case "back":
					$price_box.addClass("active");
					$result_box.removeClass("active");
					return false;
					break;				
				case "ajax-reg":
                    var tel=$(".tel").val();

                    if(tel==0){
                        $(".tel").addClass("waringP");
                        $('.lx_login .message').show();
                        $('.lx_login .message').html('请输入手机号');
                    }else if(zh.regFormP($this_input)){
						var this_btn=$(this);
						$.post(url,data,function(res){
							switch(res.result){
								case true:
									zh.successAction($(".reg_content"),this_btn.attr("data-url"),"注册成功！","登录页面",'');
								break;
								case false:
                                    if(res.msg.verifyCode){
									this_btn.parents("form").find("input[name='verifyCode']").addClass("waringP");
                                    $('.lx_login .message').show();
                                    $('.lx_login .message').html(res.msg.verifyCode);
									zh.cancelWaringP(this_btn.parents("form").find("input[name='verifyCode']"));
								}
									return false;
								break;
							}
						},'json');
					}
					return false;
				break;
                case "ajax-login-index":
					if(zh.regForm($this_input)){
						var this_btn=$(this);
						$.post(url,data,function(res){
							switch(res.result){
								case true:
									window.location.href=res.url;
								break;
								case false:
									if(res.msg.phone){
										this_btn.parents("form").find(".tel").val(res.msg.phone).addClass("waring");
										zh.cancelWaring(this_btn.parents("form").find(".tel"));
									}
									if(res.msg.password){
										this_btn.parents("form").find(".pass").attr("type","text").val(res.msg.password).addClass("waring");
										zh.cancelWaring(this_btn.parents("form").find(".pass"));
									}
									if(res.msg.verifyCode){
										this_btn.parents("form").find("input[name='verifyCode']").val(res.msg.verifyCode).addClass("waring");
										zh.cancelWaring(this_btn.parents("form").find("input[name='verifyCode']"));
									}
									return false;
								break;
							}
						},'json');
					}
					return false;
				break;
				case "ajax-login":
                    var tel=$(".tel_log").val();
                    if(tel==0){
                        $(".tel_log").addClass("waringP");
                        $('.lx_login .message').show();
                        $('.lx_login .message').html('请输入手机号');
                    }else if(zh.regFormP($this_input)){
						var this_btn=$(this);
						$.post(url,data,function(res){
							switch(res.result){
								case true:
									window.location.href=res.url;
                                    
								break;
								case false:
									if(res.msg.phone){
                                        this_btn.parents("form").find(".tel").addClass("waringp");
                                        $('.lx_login .message').show();
                                        $('.lx_login .message').html(res.msg.phone);
										zh.cancelWaringP(this_btn.parents("form").find(".tel"));
									}
									if(res.msg.password){
										this_btn.parents("form").find(".pass").addClass("waringP");
                                        $('.lx_login .message').show();
                                        $('.lx_login .message').html(res.msg.password);
										zh.cancelWaringp(this_btn.parents("form").find(".pass"));
									}
									if(res.msg.verifyCode){
										this_btn.parents("form").find("input[name='verifyCode']").addClass("waringP");
                                        $('.lx_login .message').show();
                                        $('.lx_login .message').html(res.msg.verifyCode);
										zh.cancelWaring(this_btn.parents("form").find("input[name='verifyCode']"));
									}
									return false;
								break;
							}
						},'json');
					}
					return false;
				break;
                case "fb-ajax":
                    if(zh.regForm($this_input)){
                        return zh.regForm($this_input);
                    }else{
                        if($(".waring").size()>0){  
                           var firstTip=$(".waring").eq(0).offset().top-100;
                            $("html,body").animate({scrollTop:firstTip}, 500);
                        }
                    }
					return false;
				break;
				default:
					return zh.regForm($this_input);
					break;
			}
		});
        
        //登录注册 验证码
		$(".log_sendCode").on("click",function(){
			var url=$(this).attr("data-url");
			var $phone=$(this).parents("form").find(".tel");
			if(zh.regFormP($phone)){
				var param={
					phone:$phone.val(),
					_csrf:$(this).parents("form").find("#_csrf").val(),
				}
				zh.verifyCodeP(url,param,$(this));
			}
		});
		//验证码
		$(".sendCode").on("click",function(){
			var url=$(this).attr("data-url");
			var $phone=$(this).parents("form").find(".tel");
			if(zh.regForm($phone)){
				var param={
					phone:$phone.val(),
					_csrf:$(this).parents("form").find("#_csrf").val(),
				}
				zh.verifyCode(url,param,$(this));
			}
		});
        //图形验证码
        $(".trans").click(function(){
          zh.verifyCodeImg($(".code_img"));
        });

		//添加表单中radio默认值
		$(".list-input-form").find("td").each(function(){
			$(this).find("input[type='radio']").eq(0).attr("checked","checked");
		});
	};
    
  /*  if($(".banner-notice .card2").length>0){
         //图形验证码
        $(".trans").click(function(){
          zh.verifyCodeImg($("#code_img"));
        });
    }*/
    if($(".da_login").length>0){
        //登录 分步验证
        var $this_input=$(".list-input-txt");
        $this_input.blur(function(){
            var tel_log=$(".tel_log").val();  
            if(tel_log==0){
                $(".tel_log").addClass("waringP");
                $('.lx_login .message').show();
                $('.lx_login .message').html('请输入手机号');
            }else{
                zh.regFormP($(this));
            }
        });
    }
    if($(".lx-reg").length>0){
        //注册 分步验证
        var $this_input=$(".list-input-txt");
        $this_input.blur(function(){
            var tel=$(".tel").val();  
            if(tel==0){
                $(".tel").addClass("waringP");
                $('.lx_login .message').show();
                $('.lx_login .message').html('请输入手机号');
            }else{
                zh.regFormP($(this));
            }
        });
    }
    if($(".lx_login").length>0){
        
        //用户协议交互
        $(document).ready(function(){
             var flag = 1;
             $("#accept").click(function(){
              if(flag == 1){
               $("#accept").attr('checked','false');
                $(".reg-bg").css('background','#c5c5c5');
                $(".reg-bg").attr('disabled','true');
               flag = 0;
              } else{
               $("#accept").attr('checked','true');
                $(".reg-bg").css('background','#199ef0'); 
                $(".reg-bg").attr('disabled','false'); 
               flag = 1;
              }
             })
        });
        
    };
    /*登录成功*/
	if($(".login_success").length>0){
        $(function(){
            $(".header.index").css('backgroundImage','url(/static/img/list-header-banner.jpg)');
            //zh.successAction($(".time"),refurl,"登录","","登录前的页面");
			$(".time").html("<span id='wait'>3</span>秒钟后跳转到登录前的页面");
			var num=parseInt($("#wait").text());
			setTimeout(function(){
				if(num>0){
					num--;
					$("#wait").text(num);
					setTimeout(arguments.callee,1000);
				}else{
					window.location.href=refurl;
				}
			},1000);
            $("#back").click(function(){
                window.location.href=refurl;
            })
        });
    };
     /*第三方登录手机绑定*/
	if($(".login_bind").length>0){
        $('.ajax-login').on('click',function(){
            var $this_input=$(this).parents("form").find(".list-input-txt");	
            var url=$(this).attr("data-url");
            var data={
                property:$('.login_tab').find(".logHover").attr('data'),
                _csrf:$("#_csrf").val(),
                phone:$(".tel").val(),
                verifyCode:$(".info").val()
            };
        if(zh.regForm($this_input)){
            $.post(url,data,function(res){
                switch(res.result){
                    case true:
                        window.location.href=res.url;
                    break;
                    case false:
                        if(res.msg.phone){
                            this_btn.parents("form").find(".tel").addClass("waringp");
                            $('.lx_login .message').show();
                            $('.lx_login .message').html(res.msg.phone);
                            zh.cancelWaringP(this_btn.parents("form").find(".tel"));
                        }
                        if(res.msg.password){
                            this_btn.parents("form").find(".pass").addClass("waringP");
                            $('.lx_login .message').show();
                            $('.lx_login .message').html(res.msg.password);
                            zh.cancelWaringp(this_btn.parents("form").find(".pass"));
                        }
                        if(res.msg.verifyCode){
                            this_btn.parents("form").find("input[name='verifyCode']").addClass("waringP");
                            $('.lx_login .message').show();
                            $('.lx_login .message').html(res.msg.verifyCode);
                            zh.cancelWaring(this_btn.parents("form").find("input[name='verifyCode']"));
                        }
                        return false;
                    break;
                }
            },'json');
        }
            return false;

    });
        
    };
	/*城市切换*/
	if($("#publish-per").length>0){

		//zh.ajaxCity('/data/get-district',{parent_id:$("#publish-per").val()},$("#city"));

		$("#publish-per").change(function(){
			var param={
				parent_id:$(this).val()
			}
			zh.ajaxSelect('/data/get-district',param,$("#city"),"请选择城市");
		});
	}
	
	/*专业调取*/
	if($("#publish-pro").length>0){

		$("#publish-pro").change(function(){
			var param={
				parent_id:$(this).val()
			}			
			zh.ajaxSelect('/data/get-zhengshu-type',param,$("#pro-zhs"),"请选择专业");
		});
	}
	
	//首页 资质报价试算
	if($('.banner-ass').length > 0 || $('.transfer').length > 0){
		//调取资质分类
		$("#sco-per").change(function(){
			var param={
				sco_id:$(this).val(),
				parent_id:-1,
			}
			zh.ajaxSelect('/index.php?m=content&c=index&a=get_zizhi_type',param,$("#sysort"),"选择资质分类");
		});
		//调取服务项目
		$("#sysort").change(function(){
			var param={
				parent_id:$(this).val(),
			}
			zh.ajaxSelect('/index.php?m=content&c=index&a=get_zizhi_type',param,$("#syitem"),"选择资质专业");
		});
		//调取资质等级
		$("#syitem").change(function(){
			var param={
				sco_id:$('#sco-per').val(),
				parent_id:$('#sysort').val(),
				tid:$(this).val(),
			}
//			console.log(param);
			zh.ajaxSelect('/index.php?m=content&c=index&a=get_zizhi_level',param,$("#sylevel"),"选择资质等级");
		});
		
	}

	/*日期控件启用*/
	if($("#dateinfo").length>0){
		jeDate({
			dateCell:"#dateinfo",
			format:"YYYY年MM月DD日",
			isinitVal:true,
			festival:true,
			marks:['2015-01-03','2016-01-01','2016-01-10','2016-01-15','2016-02-15','2016-03-10','2016-04-18'],
			isTime:false, //isClear:false,
			minDate:"1900-01-01 00:00:00",
			okfun:function(val){}
		});
	}

	/*个人中心头像编辑*/
	if($(".person-header-edit").length>0){
		var options =
        {
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: '../img/person/avatar.png'
        }
        var cropper = $('.imageBox').cropbox(options);
        $('#file').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = $('.imageBox').cropbox(options);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        });
        $('#btnCrop').on('click', function(){
            var img = cropper.getDataURL();
            $('#personal-header').html('<img src="'+img+'">');
        	$("#user-header").val(img);
        	$("#header-edit-btn").fadeIn();
        });
        $('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        });
        $('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        });

		$("#personal-header").on("click",function(){
			$(".person-header-edit").fadeIn();
		});

		$("#header-edit-btn").on("click",function(){
			$(".person-header-edit").hide();
			$(this).hide();
			return false;
		});
		$(".header-edit-close").on("click",function(){
			$(".person-header-edit").hide();
		});
	}
    
    //个人中心发布协议交互
    if($(".transfer_form").length>0){
         $("#u_reg").click(function(){
            $("#dialog").fadeIn();
            $("#zzc").css({
                opacity:0.3,
                display:"block"
            });
        });
        $("#diaBtn").click(function(){
            $("#dialog").fadeOut();
            $("#zzc").css("display","none");
        });
    }
   

	/*资质综合页tab切换*/
	if($(".zzBao_gd1").length>0){
		$('.zzBao_gd1 ul.zzBao_gd1_title>li').mouseover(function(){
			var index = $(this).index();
			$('div.zzBao_gd1_menu>ul').eq(index).show().siblings().hide();
			$(this).addClass('zzBao_gd1_current').siblings().removeClass('zzBao_gd1_current');
		});
	};

	/*兼职信息 页面tab切换*/
	if($('.qiyeAffi').length > 0){
		$('.qiyeAffi ul.qyaffi_tab_title>li').click(function(){
			var index = $(this).index();
			$('div.qyaffi_tab_menu>div.qyaffi_tab_list').eq(index).show().siblings().hide();
			$(this).addClass('qyaffi_tab_current').siblings().removeClass('qyaffi_tab_current');
		});
	}

	/*兼职信息*/
	if($(".zzBao_gd_wrapper").length>0){
		$(".jianzhi_gd2_list_ul").each(function(){
			if($(this).height()>$(this).parent("dd").height()){
				$(this).parents("dl").addClass("down");
			}
		});
	}

    /*兼职信息 简历库 企业立即举报*/
	if($(".qiyeAffi_l_content").length>0){
        
        $(".report").click(function(){
            $("#dialogjb").fadeIn();
            $("#zzc").css({
                opacity:0.3,
                display:"block"
            });
        });
        $(".close").click(function(){
            $("#dialogjb").fadeOut();
            $("#zzc").css("display","none");
        });
        
        //立即举报 提交交互
        $("#post_report").click(function(){
            var data={
                reporttype:$('.xz_type input[name="view_report"]:checked').val(),
                content:$(".xz_con textarea").val(),
                _csrf:$("#dialogjb #_csrf").val(),
                type:$(this).attr("data-type"),
                zhengshu_id:$(this).attr("data-id"),
				}
			$.post($(this).attr("data-url"),data,function(data){
				switch(data.result){
					case true:
						alert("举报成功");
                        $("#dialogjb").fadeOut();
                        $("#zzc").css("display","none");
                        
					break;
					case false:
						alert("您已举报过！");
                        $("#dialogjb").fadeOut();
                        $("#zzc").css("display","none");
					break;
				}
			},'json');
		});
        
    };
    
    /*兼职信息 个人立即举报*/
	if($(".userAffi").length>0){
        
        $(".report").click(function(){
            $("#dialogjb").fadeIn();
            $("#zzc").css({
                opacity:0.3,
                display:"block"
            });
        });
        $(".close").click(function(){
            $("#dialogjb").fadeOut();
            $("#zzc").css("display","none");
        });
        
        //立即举报 提交交互
        $("#post_report_u").click(function(){
            var data={
                reporttype:$('.xz_type input[name="view_report"]:checked').val(),
                content:$(".xz_con textarea").val(),
                _csrf:$("#dialogjb #_csrf").val(),
                type:$(this).attr("data-type"),
                zhengshu_id:$(this).attr("data-id"),
				}
			$.post($(this).attr("data-url"),data,function(data){
				switch(data.result){
					case true:
						alert("举报成功");
                        $("#dialogjb").fadeOut();
                        $("#zzc").css("display","none");
                        
					break;
					case false:
						alert("您已举报过！");
                        $("#dialogjb").fadeOut();
                        $("#zzc").css("display","none");
					break;
				}
			},'json');
		});
        
    };
    
	/*兼职信息-投递简历*/
	if($("#resume-sub").length>0){
        
		$("#resume-sub").click(function(){
            var url=$(this).attr("data-url");
			$.post(url,{
				'id':$(this).attr("data-id"),
				'_csrf':$("#_csrf").val(),
			},function(data){
				switch(data.result){
					case true:
						alert("投递成功");
                        $("#resume-sub").addClass('disabled').attr('disabled',true);
					break;

					case false:
						if(typeof(data.msg)=="string"){
							alert(data.msg);
							if(data.url){
								window.location.href=data.url;
							}
						}else{
							alert("数据异常");
						}
					break;
				}
			},'json');
			return false;
		});

	};
    
	//公司信息和认证 tab切换
	if($('.comedit_r_menu').length>0){
		$('.comedit_r_menu ul.comedit_r_title>li').click(function(){
			var index = $(this).index();
			$('div.comedit_tab>div').eq(index).show().siblings().hide();
			$(this).addClass('comedit_title_current').siblings().removeClass('comedit_title_current');
		});
	}

	//搜索页面 个人/企业切换
	if($('.zzsearch').length>0){
		$('.zzsearch .search_main_title>a').click(function(){
			var i = $(this).index();
			i = i-1;
			$('.zzsearch div.search_tab>div').eq(i).show().siblings().hide();
			$(this).addClass('search_user_curr').siblings().removeClass('search_user_curr');
		});

		// 点击城市，分类效果
		$('.zzsearch .search_submenu_ul>li a').click(function(){
			$(this).parent().parent().find('a').removeClass('search_txt_current');
			$(this).addClass('search_txt_current');
		});
	}


	/*分享控件*/
	if($("#fenxiang").length>0){
		window._bd_share_config={
	    	"common":{
	    		"bdSnsKey": {},
				"bdText": "",
				"bdMini": "2",
				"bdMiniList": false,
				"bdPic": "",
				"bdStyle": "0",
				"bdSize": "16"
	    		},
	    		"share":{}
    		};
    	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
	}


	/*教育页定位滑动*/
	if($(".zzBao_edu").length > 0){
		$('a[href*=#]').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var $target = $(this.hash);
				$target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
				if ($target.length) {
					var targetOffset = $target.offset().top;
					$('html,body').animate({scrollTop: targetOffset }, 1000);
					return false;
				}
			}
		});
	}

	/*常见问题交互*/
	if($(".faq").length > 0){
		$(".faq>a").on('click',function(){
			$(this).toggleClass("active");
			$(this).parent("li").siblings("li").children("a").removeClass("active");
		});
	}

	/*bbs页交互*/
	if($('.zzBbs').length>0){
		function bbsTab(a,b,c){
			$(a).click(function(){
				var i = $(this).index();
				$(b).eq(i).show().siblings().hide();
				$(this).addClass(c).siblings().removeClass(c);
			})
		}
		//论坛首页切换
		bbsTab('.bbs_gd1_bd ul li','.bbs_gd1bd_menu>ul','bbs_gd1bd_current');

		// 论坛列表页切换
		bbsTab('.lx_title a','.list_content>.list_tab','list_active')

		// 轮播图
		var _index=0;
		var timePlay=null;
		$("#Adv .ImgList").eq(0).show().siblings("div").hide();
		$("ul.bbs_gd1_button li").hover(function(){
			clearInterval(timePlay);
			_index=$(this).index();
			//alert(_index);
			$(this).addClass("bbs_gd1_hover").siblings().removeClass("bbs_gd1_hover");
			$("#Adv .ImgList").eq(_index).fadeIn(1000).siblings("div").fadeOut(1000);
		},function(){
			/*鼠标移开*/
			autoPlay();
		});

		//自动轮播
		function autoPlay(){
			timePlay=setInterval(function(){
				_index++;
				if(_index<6){
					$("ul.bbs_gd1_button li").eq(_index).addClass("bbs_gd1_hover").siblings().removeClass("bbs_gd1_hover");
					$("#Adv .ImgList").eq(_index).fadeIn(1000).siblings("div").fadeOut(1000);
				}else{
					_index=-1;
				}
			},3000);
		};
		autoPlay();
	}

	/*登录页面交互*/
	if($('.lx_login').length>0){
		// 切换手机动态登录
		$('.lx_login .login_tab>a').click(function(){
            $(".message").html('').hide();
			var index = $(this).index();
			$('div.login_form_menu>form').eq(index).show().siblings().hide();
			$(this).addClass('logHover').siblings().removeClass('logHover');
		});
		
		/*注册页面交互*/
		$('.reg_nav>a').click(function(){
			$(this).addClass('logHover').siblings().removeClass('logHover');
			$('#property').val($(this).attr('data'));
            var type=$('.logHover').attr('data');
            $(".reg_form").show();
            $(".next_form").hide();
            switch(type){
                case 'p':
                    $(".sub-ajax").show();
                    $(".sub-next").hide();
                break; 
                case 'c':
                    $(".sub-ajax").hide();
                    $(".sub-next").show();
                break; 
             }
		});
        $('.sub-next').click(function(){
            var $this_input=$(this).parents("form").find(".list-input-txt");
            var tel=$(".tel").val();
            if(tel==0){
                $(".tel").addClass("waringP");
                $('.lx_login .message').show();
                $('.lx_login .message').html('请输入手机号');
            }else if(zh.regFormP($this_input)){
                $(".reg_form").hide();
                $(".next_form").show();
            };
            
        });
        //注册页面用户协议
        $("#u_reg").click(function(){
            $("#dialog").fadeIn();
            $("#zzc").css({
                opacity:0.3,
                display:"block"
            });
        });
        $("#diaBtn").click(function(){
            $("#dialog").fadeOut();
            $("#zzc").css("display","none");
        });
        //二维码交互
        $(".login-switch").click(function(){
            $(".code").toggle();
            $(".login-point").toggleClass("login-pointP");
            
        });
        
        //密码显示隐藏
        var ele_pass_box =$(".pass-box");
        var ele_pass =$(".pass-box input");
        var ele_eye = $(".pass-box i");
        ele_eye.click(function(){
            var state = $(this).attr("state");
            if(state === "off") {
                ele_pass.attr("type", "text");
                ele_eye.attr("state", "on");
                ele_eye.addClass("on");
                ele_eye.removeClass("off");
            } else {
                ele_pass.attr("type", "password");
                ele_eye.attr("state", "off");
                ele_eye.addClass("off");
                ele_eye.removeClass("on");
            }
        });
        
        //密码强度
          $('#pass').keyup(function(e) {
             //密码为八位及以上并且字母数字特殊字符三项都包括
             var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
           //密码为七位及以上并且字母、数字、特殊字符三项中有两项，强度是中等 
             var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
             var enoughRegex = new RegExp("(?=.{6,}).*", "g");
             if (false == enoughRegex.test($(this).val())) {
                 $('.lx_login .message').show();
                 $('.lx_login .message').html('请输入更多字符');
             } else if (strongRegex.test($(this).val())) {
                 $('#passstrength').addClass("strong");
             } else if (mediumRegex.test($(this).val())) {
                 $('#passstrength').addClass("medium");
             } else {
                 $('.lx_login .message').hide();
                 $('#passstrength').addClass("weak");
             }
             return true;
          });
        
	}

	/*slogan特效*/
	if($("#slogan").length>0&&!/msie [6|7|8|9|10]/i.test(navigator.userAgent)){

		var SEPARATION = 100, AMOUNTX = 50, AMOUNTY = 50;
		var container;
		var camera, scene, renderer;
		var test;
		test=document.getElementById("slogan");

		var particles, particle, count = 0;

		var mouseX = 0, mouseY = 0;

		var windowHalfX = test.clientWidth / 2;
		var windowHalfY = test.clientHeight / 2;

		init();
		animate();

		function init() {

			container = document.createElement( 'div' );

			test.appendChild( container );

			camera = new THREE.PerspectiveCamera( 75, test.clientWidth / test.clientHeight, 1, 10000 );

			camera.position.z = 1000;

			scene = new THREE.Scene();

			particles = new Array();

			var PI2 = Math.PI * 2;
			var material = new THREE.ParticleCanvasMaterial( {

				color: 0xffffff,
				program: function ( context ) {
					context.beginPath();
					context.arc( 0, 0, 1, 0, PI2, true );
					context.fill();
				}
			});

			var i = 0;

			for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
				for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
					particle = particles[ i ++ ] = new THREE.Particle( material );
					particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
					particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 );
					scene.add( particle );
				}
			}

			renderer = new THREE.CanvasRenderer();
			renderer.setSize( test.clientWidth, test.clientHeight );
			container.appendChild( renderer.domElement );

			mouseY = -500;
			document.addEventListener( 'mousemove', onDocumentMouseMove, false );
			document.addEventListener( 'touchstart', onDocumentTouchStart, false );
			document.addEventListener( 'touchmove', onDocumentTouchMove, false );
			window.addEventListener( 'resize', onWindowResize, false );
		}

		function onWindowResize() {
			windowHalfX = test.clientWidth / 2;
			windowHalfY = test.clientHeight / 2;
			camera.aspect = test.clientWidth / test.clientHeight;
			camera.updateProjectionMatrix();
			renderer.setSize( test.clientWidth, test.clientHeight );
		}

		function onDocumentMouseMove( event ) {
			mouseX = -(event.clientX - windowHalfX);
			mouseY = -(event.clientY - windowHalfY);
		}

		function onDocumentTouchStart( event ) {
			if ( event.touches.length === 1 ) {
				event.preventDefault();
				mouseX = event.touches[ 0 ].pageX - windowHalfX;
				mouseY = event.touches[ 0 ].pageY - windowHalfY;
			}
		}

		function onDocumentTouchMove( event ) {
			if ( event.touches.length === 1 ) {
				event.preventDefault();
				mouseX = event.touches[ 0 ].pageX - windowHalfX;
				mouseY = event.touches[ 0 ].pageY - windowHalfY;
			}
		}

		function animate() {
			requestAnimationFrame( animate );
			render();
		}

		function render() {
			camera.position.x += ( mouseX - camera.position.x ) * .05;
			camera.position.y += ( - mouseY - camera.position.y ) * .05;
			camera.lookAt( scene.position );
			var i = 0;
			for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
				for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
					particle = particles[ i++ ];
					particle.position.y = ( Math.sin( ( ix + count ) * 0.3 ) * 50 ) + ( Math.sin( ( iy + count ) * 0.5 ) * 50 );
					particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 2 + ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 2;
				}
			}

			renderer.render( scene, camera );
			count += 0.1;
		}
	}else{
		$("#slogan").css("background-image","url(/static/img/index-slogan_ie.jpg)");
	}


	/*建筑培训页面交互*/
	if($('.edu_sp_menu').length > 0){
		//视频课程交互
		$("dl.edu_scroll_menu>dt>a").mouseover(function(){
   			var index=$(this).index();
   			$(this).addClass("active").siblings().removeClass("active");
   			$(".edu_scroll_menu>dd").eq(index).addClass("active").siblings("dd").removeClass("active");
   			return false;
   		});
   		$("#edu_data_scroll>dt>a").mouseover(function(){
   			var index=$(this).index();
   			$(this).addClass("active").siblings().removeClass("active");
   			$("#edu_data_scroll>dd").eq(index).addClass("active").siblings("dd").removeClass("active");
   			return false;
   		});
   		$("#edu_sp_scroll>dt>a").mouseover(function(){
   			var index=$(this).index();
   			$(this).addClass("active").siblings().removeClass("active");
   			$("#edu_sp_scroll>dd").eq(index).addClass("active").siblings("dd").removeClass("active");
   			return false;
   		});
   		// 视频课程无缝轮播
   		jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});
        
   		// 考试资料交互
   		$("#edu_zl_menu>dt>a").mouseover(function(){
   			var index=$(this).index();
   			$(this).addClass("active").siblings().removeClass("active");
   			$("#edu_zl_menu>dd").eq(index).addClass("active").siblings("dd").removeClass("active");
   			return false;
   		});
   		// 在线模考交互
   		$("#edu_mk_menu>dt>a").mouseover(function(){
   			var index=$(this).index();
   			$(this).addClass("active").siblings().removeClass("active");
   			$("#edu_mk_menu>dd").eq(index).addClass("active").siblings("dd").removeClass("active");
   			return false;
   		});
   		//是否出现滚动条
   		if($('dd.active >.edu_mk_ul>li').length >4){
   			$('dd.active >.edu_mk_ul').css('overflow-y','scroll');
   		}
	}
	//考试资讯轮播
	if($('.edu_sect_news').length > 0){
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
	}
	if($("#edu_card").length>0 || $('.edu-banner-box').length >0){
		//课程倒计时
		$(".e_s02 h4").each(function(){
	   		var val=$(this).attr("data-val");
	   		//console.log(val);
	   		var $obj=$(this).parent().next('.bell-box').find("h5");
	   		zh.getRTime(val,$obj);
   		});

	}
	//建筑培训页面a字数超过8个，宽度增加
	if($('#edu_sec01').length > 0){
		var wid = $('#edu_sec01 .edu_sw_menu>dd').find('a');
		var len = 8;
		for(var i=0;i<wid.length;i++){
			if(wid.eq(i).text().length>len){
				wid.eq(i).css('width','165px');
			}
		}
	}
	// 资质代办首页交互
	if($(".section-cer").length>0){
		// 加盟，转换 切换
		if($('.cer-price-middle').length >0){
			$(".pre-mid-tab>dt>a").click(function(){
				var index=$(this).index();
				$(this).addClass("active").siblings().removeClass("active");
				$(".pre-mid-tab>dd>ul").eq(index).addClass("active").siblings().removeClass("active");
			});
		}
		$(".price-tab-box>dt>a").click(function(){
			var index=$(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".price-tab-box>dd>div").eq(index).addClass("active").siblings().removeClass("active");
		});
		
		// 首页 资质报价试算
		if($("#cerTab").length > 0){ 
			//资质类型隐藏
			$('#certypeArrow').mouseenter(function(){
				$("#cer_type p span").stop().animate({"height":"105px"},"fast")
			})
			$('#certypeArrow').click(function(event){
				event.stopPropagation();
				$("#cer_type p span").stop().animate({"height":"28px"},"fast")
			});
			$('#cer_type span a').click(function(){
                $(this).addClass("r_hover").siblings().removeClass("r_hover");
				$("#cer_type p span").stop().animate({"height":"28px"},"fast");
				$('#type-daiban').text($(this).text());
                
                var index = $('#cer_type').find(".r_hover").index();
				$(".zzgd_sort").eq(index).show().siblings(".zzgd_sort").hide();
				$("#cerArrow").show();
                cerInfo();
                
			})
			//资质等级显示前4个
			function cerSort(){
				var index = $('#cer_type').find(".r_hover").index();
				var sort = $('.zzgd_sort').eq(index).find('a');
				$(sort).hide();
				$(sort).slice(0,4).show();
				var r = $('.zzgd_sort').eq(index).find('a.r_hover').text();
				$('#cer-daiban').text(r);
			}
			cerSort();
            $('#cerArrow').mouseenter(function(){
                var index = $('#cer_type').find(".r_hover").index();
                $(".zzgd_sort p").eq(index).find("a").show();
			})
            $('#cerArrow').click(function(event){
				event.stopPropagation();
                cerSort();
			})
			$('#cer_type').on('change click',function(){
				cerSort();
			});
			 
			var data =[];
			var result = {};
			// 初始化资质详情
			(function(){
				var index = $('#cer_type').find(".r_hover").index();
				$(".zzgd_sort").not(":eq("+index+")").hide();
				var priceID=$(".zzgd_sort").find(".r_hover").attr("data-id"); // 获取资质等级
            
                    if(djArray[priceID]!=undefined || djArray[18]!=undefined){
                    data=djArray[priceID]!=undefined ? djArray[priceID] : djArray[priceID];	
                    
                    $("#cer_level").html("<span>专业等级：</span>");
                    if(data && data.length>0){
								for(var i in data){
                                    if(!i){
                                        $("#cer_level").html("<span>专业等级：</span><p>暂无专业等级</p>");
                                    }else{
                                        for(var j in data[i]){
                                            $("#cer_level ").append("<a href='javascript:;' data-id='"+j+"'>"+data[i][j]+"</a>");
                                        }

                                    }					
                                }
							}else{
								$("#cer_level").html("<span>专业等级：</span><p>暂无专业等级</p>");
							}   
                    /*for(var i in data){
                        if(!i){
                            $("#cer_level").html("<span>专业等级：</span><p>暂无专业等级</p>");
                        }else{
                            for(var j in data[i]){
                                $("#cer_level ").append("<a href='javascript:;' data-id='"+j+"'>"+data[i][j]+"</a>");
                            }
                            
                        }					
                    }*/
				}else{
                    $("#cer_level").html("<span>专业等级：</span><p>暂无专业等级</p>");
                }
                
			})();
			cerInfo();
			//改变省份
			$('#sco-per').on('change click',function(){			
				cerInfo();
			})
			//资质详情交互
			function cerInfo(){
				$("#cerTab").on("click","a",function(){
			   		var zzhID=$(this).parents("li").attr("id");
					$(this).addClass('r_hover').siblings("a").removeClass("r_hover");
					$("#cerTab").find("li").removeClass("waring");
					switch(zzhID){
						case "cer_type":
							cerSort();
							result={};
							$(".zzgd_sort").find("a").removeClass("r_hover");
							var index=$(this).index();
							$(".zzgd_sort").eq(index).show().siblings(".zzgd_sort").hide();
							$("#cer_level ").html("<span>专业等级：</span><p>请选择资质类型</p>");
						break;
		
						case "cer_price":
							cerSort();
							result={};
                            $(this).addClass("r_hover");
							$(this).parent(".zzgd_sort").siblings(".zzgd_sort").find("a").removeClass("r_hover");
                            $('#cer-daiban').show().text($(this).text());
							
							var priceID=$(".zzgd_sort").find(".r_hover").attr("data-id");
                             
                   
                            if(djArray[priceID]!=undefined || djArray[30]!=undefined){
                                 data=djArray[priceID]!=undefined ? djArray[priceID] : djArray[priceID];	
			   				
							$("#cer_level").html("<span>专业等级：</span>");
							if(data && data.length>0){
								for(var i in data){
                                    if(!i){
                                        $("#cer_level").html("<span>专业等级：</span><p>暂无专业等级</p>");
                                    }else{
                                        for(var j in data[i]){
                                            $("#cer_level ").append("<a href='javascript:;' data-id='"+j+"'>"+data[i][j]+"</a>");
                                        }

                                    }					
                                }
							}else{
								$("#cer_level").html("<span>专业等级：</span><p>暂无专业等级</p>");
							}
                            }else{
                                $("#cer_level").html("<span>专业等级：</span><p>暂无专业等级</p>");
                            }
						break;
		
						}
					return false;
			  });
			}	
			//获取报价
			$('.ajax-cer').on('click',function(){
				var $this_input=$(this).parents("form").find(".list-input-txt");	
				var url=$(this).parents("form").attr("action");
				var data={
					sco_id:$('#sco-per').find("option:selected").val(),
					parent_id:$('#cer_type').find('a.r_hover').attr('data-id'),
					zizhi_id:$(".zzgd_sort").find(".r_hover").attr("data-id"),
					zizhi_dengji:$('#cer_level').find('a.r_hover').attr('data-id'),
					phone:$("#cer_phone").val(),
					verifyCode:$("#cer_yzm").val(),
					_csrf:$("#cerTab #_csrf").val()
				}				
				if(zh.regForm($this_input)){
					var this_btn=$(this);
					$.post(url,data,function(res){
						switch(res.result){
							case true:
								window.location.href=res.url;
							break;
							case false:
								if(res.msg.phone){
									this_btn.parents("form").find(".tel").val(res.msg.phone).addClass("waring");
									zh.cancelWaring(this_btn.parents("form").find(".tel"));
								}
								if(res.msg.verifyCode){
									this_btn.parents("form").find("input[name='verifyCode']").val(res.msg.verifyCode).addClass("waring");
									zh.cancelWaring(this_btn.parents("form").find("input[name='verifyCode']"));
								}
								return false;
							break;
						}
					},'json');
				}
					return false;						
		
			})
            
		}
		
		//建筑证书评估交互
		if($('#zshuTab').length > 0){/*console.log('0')*/
			//显示前4个
           
			function zsSort(box,gb){
				var sort = $(box).find('a');
				$(sort).hide();
				$(sort).slice(0,4).show();
				var r = $(box).find('a.r_hover').text();
				$(gb).text(r);
			};
			zsSort('.sort_box','#zshu_daiban');
			zsSort('.zsType','#zshu_gc');
            
			$('#zshuArrow').on("mouseover click",function(){
				$(".sort_box").find('a').show();
			})
			$('#typeArrow').on("mouseover click",function(){
				$(".zsType").find('a').show();
			});
			function zsType(){
                $(".zsType").on("click","a",function(){
                    $(this).addClass('r_hover').siblings("a").removeClass("r_hover");	
					zsSort('.zsType','#zshu_gc');
                });
			}
			zsType();
			//调取证书类型
				$(".sort_box>a").click(function(){
					$('.zsType').html('');
					$(this).addClass('r_hover').siblings('a').removeClass("r_hover");
					zsSort('.sort_box','#zshu_daiban');	
                    $(".zsType").find('a').hide().slice(0,4).show();
					var param={
						parent_id:$('.sort_box').find('a.r_hover').attr("data-id")
					}
//					console.log('param',param);
					
					zh.ajaxCer('/data/get-zhengshu-type',param,$(".zsType"),"证书类型");
				});
           //获取报价
			$('.ajax-zshu').on('click',function(){
				var $this_input=$(this).parents("form").find(".list-input-txt");
				var $price_box=$(this).parents(".cer-price-zh").find("#zshuTab");
				var $result_box=$(this).parents(".cer-price-zh").find(".zshu-result-box");
				
				var url=$(this).parents("form").attr("action");
				var data={
                    _csrf:$("#zshuTab #_csrf").val(),
					sheng:$('#cer-adress').find("option:selected").val(),
					zhengshu_type:$('#zshu_type .zsType').find('a.r_hover').attr('data-id'),
                    verifyCode:$("#zshu_yzm").val(), 
					phone:$("#zshu_phone").val()
				};
				if(zh.regForm($this_input)){
						$.post(url,data,function(res){
							if(res){
								$price_box.hide();
								$result_box.show();
								$result_box.find("span").eq(0).text(res.price1);
								$result_box.find("span").eq(1).text(res.price2);
								}
							},'json');
						}				
					return false;						
			});
			// 证书报价点击结果返回
			$('.result-back').on('click',function(){
				 $price_box=$(this).parents(".cer-price-zh").find("#zshuTab").show();
				 $result_box=$(this).parents(".cer-price-zh").find(".zshu-result-box").hide();								
			})
		};
	};
	//资质代办精选服务
	if($('.cer-service').length >0){
		/*搜索文本框初始值*/
		$("#search").focus(function(){
			$(this).val("");
		}).blur(function(){
			if($.trim($("#search").val())==""){		
				$(this).val("专业承包");
			}
		});
		$("#search_btn").click(function(){
			$("#search_form").submit();
			return false;
		});
			
		/*资质代办搜索下拉菜单交互*/
		$("#search_service").on("mouseover",function(){
			$("#search_service_content").stop().slideToggle(100);
		});
		
		$("#search_service_list>a").hover(function(){
			zh.changeTab($(this),'selected');
			$("#type").val($(this).attr("data-val"));
		},function(){}).click(function(){
			$("#search_service").text($(this).text());
			$("#search_service_content").stop().slideUp(100);	
			return false;	
		});
			
		$(".search_service").mouseleave(function(){
			$("#search_service_content").stop().slideUp(100);
		});					
		
		//精选服务 轮播
		jQuery(".ser-banner").slide({titCell:".ser-ban-hover ul",mainCell:".ser-ban-box ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
		//服务案例
		jQuery("#case-banner").slide({titCell:".case-ban-hover ul",mainCell:".case-ban-box .ser-wrap",autoPage:true,effect:"leftLoop",autoPlay:true,vis:1});
	};
    
    /*资质详情详细估价交互-finish页面*/
    if($('.info_step').length>0){
        //人数计算
        pNumChange();
        
        //滚动导航固定
        var dH=$(".nav-floor").offset().top;
	
        $(window).scroll(function(){
            var scroH=$(document).scrollTop();
            if(scroH>dH){
                $(".nav-floor").addClass("fixed")
            }else{
                $(".nav-floor").removeClass("fixed")}
        })
        
        
    };
    /*资质详情交互 info页面*/
	if($('.businessDetails').length>0){
        //资质报价试算
        if($(".business_wrapper").length > 0){
            $('.card1 select').on('change',function(){
                //选择资质等级 点击选中
                var select=$(this).find("option:selected").val();
                var sel_f2=$(this).find("option:selected");
                if(select!=0 && sel_f2){
                    $(this).addClass("selected2");
                    //下方显示选中项目
                    var item=$(this).attr("id");
                    switch(item){
                        case 'sysort':
                            var ser_id=$(this).find("option:selected").html();
                            $(".sel_items #parent_id").show().html(ser_id);
                            break;
                        case 'syitem':
                            var syitem=$(this).find("option:selected").html();
                            $(".sel_items #zizhi_id").show().html(syitem);
                            break;
                        case 'sylevel':
                            var sylevel=$(this).find("option:selected").html();
                            $(".sel_items #level").show().html(sylevel);
                            break;
                        case 'sco-per':
                            var sco_per=$(this).find("option:selected").html();
                            $(".sel_items #sco_id").show().html(sco_per);
                            break;
                    };
                }else{
                    $(this).removeClass("selected2");
                    var name=$(this).attr("name");
                    $(".sel_items span").each(function(){
                        var id=$(this).attr("id");
                        if(name===id){
                            $(this).hide();
                        }
                    })
                };
            });
           $('.card1 input.list-input-txt').on('blur',function(){
               var $this_input=$(this); 
               if(zh.regForm($this_input)){
                    $(this).addClass("selected3");
                }
                
            });
            $('.ajax-bus').on('click',function(){
                    var $this_input=$(this).parents("form").find(".list-input-txt");	
				    var url=$(this).parents("form").attr("action");
				    var data={
                        sco_id:$('#sco-per').find("option:selected").val(),
                        parent_id:$('#sysort').find("option:selected").val(),
                        zizhi_id:$("#syitem").find("option:selected").val(),
                        zizhi_dengji:$('#sylevel').find("option:selected").val(),
                        phone:$("#cer_phone").val(),
                        verifyCode:$("#cer_yzm").val(),
                        _csrf:$("#_csrf").val()
				    };			
				if(zh.regForm($this_input)){
                    
					$.post(url,data,function(res){
                        switch(res.result){
							case true:
                                if(res.use_shangdong==1){
                                    $('.hidden').show();
                                }else{
                                    $('.hidden').hide();
                                }
                                
                                $(".card1").hide();
                                $(".card2").show();
                                $(".businessDetails .step_icon_context").css("backgroundPosition","0px -195px");
                                //弹出报价详情
                                if(res.has_people_price==1){
                                    $("#dialog").fadeIn();
                                    $("#zzc").css({
                                        opacity:0.3,
                                        display:"block"
                                    });
                                };
                                
                                var total_price=parseFloat(res.ser_price)+parseFloat(res.people_price);
                                $("#agent_price").html(res.ser_price);
                                $(".per_num").html(res.ser_price);
                                if(res.people_price!=0){
                                    $("#total_people_price").html(res.people_price+'万元/年');
                                }else{
                                    if(res.total_price!=0){ 
                                        $("#total_people_price").html(res.total_price+'万元/年');
                                    }else{
                                        $("#total_people_price").html('面议');
                                    }
                                }
                                
                                $("#total_price").html(total_price+'万元');
                                
                                $(".price_per").html(res.people_price);
                                $(".t_num").html(res.total_price);
                                $(".com1 span").html(res.zizhi_zichan);
                                $(".com2 span").html(res.people_count);
                                
                                $.each(res.data,function(i,n){
                                    
                                        var list='';
                                        var str='';
                                        $.each(n.items,function(j,m){
                                            var toalper=0;
                                            var price=0;
                                            
                                            if(m.people=='' || m.price==''){
                                                toalper=0;
                                            }else{
                                                toalper+=Number((parseFloat(m.people)*parseFloat(m.price)).toFixed(2));
                                            }
                                            
                                            if(m.price==''){
                                                price=0;
                                            }else{
                                                price=parseFloat(m.price);
                                            }
                                            
                                            list+='<div class="list"><li>'+m.name+'</li><li class="person_peo">'+parseInt(m.people)+'</li><li><input class="person_num" data-person="0" placeholder="请填写" type="text"/></li><li class="person_pc">'+price+'</li><li class="person_tal">'+toalper+'</li></div>';
                                            str='<div class="price_typen"><div class="lists">'+list+'</div></div>';
                                            
                                            //人数计算
                                            pNumChange();
                                        });
                                    
                                    $(".tableList .list-r").append("<div class='price_typeBox'><div class='price_type_t'>"+n.parent_name+"</div><div class='price_type'>"+str+"</div></div>");
                                });
                                
							break;
                            case false:
								if(res.msg.verifyCode){
									$('.ajax-bus').parents("form").find("input[name='verifyCode']").val(res.msg.verifyCode).addClass("waring");
									zh.cancelWaring($('.ajax-bus').parents("form").find("input[name='verifyCode']"));
								}
								return false;
							 break;
						}
						
					},'json');
				}
					return false;
                    
			});
            
            //弹出遮罩层
            $("#diaBtn").click(function(){
                $("#dialog").fadeOut();
                $("#zzc").css("display","none");
            });
            
            
            //报价详情缩小到左侧效果
            $('#narrow').on('click', function () {
                
                var cart = $('.on_price');
                var imgtodrag = $('#dialog');
                imgtodrag.fadeOut();
                    $("#zzc").css("display","none");
                    $('.on_price').fadeIn();
                 if (imgtodrag) {

                    var imgclone = imgtodrag.clone()
                        .offset({
                            top: imgtodrag.offset().top,
                            left: imgtodrag.offset().left
                        })
                        .css({
                            'opacity': '0.5',
                                'position': 'absolute',
                                'height': '150px',
                                'width': '150px',
                                'z-index': '100',
                                'background':'#fff'
                        })
                        .appendTo($('body'))
                        .animate({
                            'top': cart.offset().top + 10,
                            'left': cart.offset().left + 10,
                            'width': 75,
                            'height': 75
                    }, 1000, 'easeInOutExpo');

                    imgclone.animate({
                        'width': 0,
                        'height': 0
                    }, function () {
                        $(this).detach()
                    });

                    
                }
            });
            //展开
            $('.on_price').on('click', function () {
                 $("#dialog").fadeIn();
                    $("#zzc").css({
                        'opacity':0.3,
                        'display':"block"
                });
                $(this).fadeOut();
            });
            //重新报价
            $('.card2 .apply').on('click', function () {
                 $(".card1").show();
                 $(".card2").hide();
                 $(".businessDetails .step_icon_context").css("backgroundPosition","0 -150px");
                 $(".tableList .list-r").empty();
            });
            $('#dialog .apply').on('click', function () {
                $("#dialog").fadeOut();
                $("#zzc").css("display","none");
                $(".card1").show();
                $(".card2").hide();
                $(".businessDetails .step_icon_context").css("backgroundPosition","0 -150px");
                $(".tableList .list-r").empty();
            });
            
            //资质报价试算
            if($('.business_gd1').length > 0){
                //调取资质分类
                $("#sco-per").change(function(){
                    var param={
                        sco_id:$(this).val(),
                        parent_id:-1,
                    }
                    zh.ajaxSelect('/index.php?m=content&c=index&a=get_zizhi_type',param,$("#sysort"),"选择资质分类");
                });
                //调取服务项目
                $("#sysort").change(function(){
                    var param={
                        parent_id:$(this).val(),
                    }
                    zh.ajaxSelect('/index.php?m=content&c=index&a=get_zizhi_type',param,$("#syitem"),"选择资质专业");
                });
                //调取资质等级
                $("#syitem").change(function(){
                    var param={
                        sco_id:$('#sco-per').val(),
                        parent_id:$('#sysort').val(),
                        tid:$(this).val(),
                    }
        //			console.log(param);
                    zh.ajaxSelect('/index.php?m=content&c=index&a=get_zizhi_level',param,$("#sylevel"),"选择资质等级");
                });

            }
            
        };
            
		// 资质新办选项卡切换
		$('.businessDetails ul.bus_gd2_tabnav>li').hover(function(){
			var index = $(this).index();
			$(this).addClass('bus_gd2_current').siblings().removeClass('bus_gd2_current');
            $('div.bus_gd2_tabcontent').eq(index).stop().fadeIn().siblings().hide();
		});
        $('.businessDetails .advice_wrapper1 .tab .li').eq(0).find(".tits").addClass('shadow');
        $('.businessDetails .advice_wrapper1 .tab .li').eq(0).find(".tab_con").addClass("con_open");
	   $('.businessDetails .advice_wrapper1 .tab .li').hover(function(){
           $(this).find(".tits").addClass('shadow').end().siblings().find(".tits").removeClass('shadow');
           $(this).find(".open").addClass("close").parents(".li").siblings().find(".open").removeClass("close");
           var flag=$(this).find(".tab_con .p").text();
           if(flag!=''){
               $(this).find(".tab_con").addClass("con_open");
               $(this).siblings().find(".tab_con").removeClass("con_open");
           }else{
               $(this).siblings().find(".tab_con").removeClass("con_open");
           }
		});
        
        //展开了解更多效果
        $(".advice_wrapper2 .p").click(function(){
            $(this).animate({opacity:0},"slow");
            $(".advice_wrapper2_open .close").animate({background:'#b5b4b4'},"slow");
            $(this).parents(".advice_wrapper2").animate({height:'380px'},"slow");
            $(this).parents(".advice_wrapper2").next(".advice_wrapper2_open").slideDown("slow");
		});
        $(".advice_wrapper2_open .close").click(function(){
            $(this).animate({background:'#808080'},"slow");
            $(".advice_wrapper2 .p").animate({opacity:1},"slow");
            $(this).parents(".advice_wrapper").prev().animate({height:'440px'},"slow");
            $(this).parents(".advice_wrapper2_open").slideUp("slow");
		}); 
        //
        
	};
	
	/*资质详情详细估价交互-step页面*/
	if($('.inst_grid').length>0){		
		// 资质等级 效果
		function zzSort(){
			var index=$("#zzh_tab").find(".r_hover").index();
			var sort =$(".bus_gd1_sort").eq(0).find('a');
			$(sort).hide();
			$(sort).slice(0,4).show();	
		}
		zzSort();		
		$('#inst_arrow').on("mouseover click",function(){
			$(".bus_gd1_sort").eq(0).find('a').show();
		})
		$('#zzh_tab').on('change click',function(){
			zzSort();
		})
	};
	
    
    //组合报价
    if($('.bj_ban_box').length > 0){
        
        //截取字符长度
        $('.menu_list .all-title').each(function(){
            var width=$(this).width()/2+10;
            $(this).css('marginLeft','-'+width+'px');
        })
       // console.log(width)
        
        var grade=$(".menu_left .grade span");
        grade.on('click',function(){
            var menu=$(this).parents(".menuBox").find(".menu");
            if(!menu.is("menu_c")){
                $(this).addClass("selected");
                menu.addClass("menu_c");
                $(this).parent().css('visibility','hidden');
                //购物车飞入动画
               fly($(this));
                //追加节点
                addNode($(this));
                //内容修改
                var menuT=$(this).parents('.menuBox').find('.menu');
                var menuTtext=menuT.attr('data-text');
                var str=menuTtext+' '+$(this).text();
                menuT.text(str);
                
            };
        });
        $('.menuBox').on('click','.menu',function(){
            delClick($(this));
            //删除右侧节点
            var menu_l=$('.sel_menu .menu .menu_select');
            removeNode($(this),menu_l);
        });
        //右侧节点点击效果
        $('.sel_menu .menu').on('click','.menu_select i',function(){
            var menu_l=$('.menu_left .menu');
            removeNode($(this),menu_l);
        });
        
        
        //取消点击效果
        function delClick(obj){
            if(!obj.is("menu_c")){
                obj.removeClass("menu_c");
                obj.next().css('visibility','visible');
                obj.text(obj.attr('data-text'));
            }
        };
        //购物车飞入动画
        function fly(obj){
            var flyElm = obj.parents(".menu_left").find(".pur i").clone().css('opacity','0.8');
            flyElm.css({
                'z-index': 9000,
                'display': 'block',
                'position': 'absolute',
                'top': obj.parents(".menuBox").offset().top +'px',
                'left': obj.parents(".menuBox").offset().left +'px',
                'width': obj.parents(".menuBox").width() +'px',
                'height': obj.parents(".menuBox").height() +'px'
            });
            $('body').append(flyElm);
            flyElm.animate({
                top:$('.gwc-c').offset().top,
                left:$('.gwc-c').offset().left,
                width:2,
                height:2,
            },600,function(){
                flyElm.remove();
            }); 
        };
        //追加节点
        function addNode(obj){
            //节点添加
            var p_node=obj.parents(".menuBox").find(".menu");
            var str=p_node.text()+' '+obj.text();
            var data=p_node.attr("data-id");
            var menuNode='<li class="menu_select" data-id="'+data+'">'+str+'<i></i></li>';
            $(".sel_menu .menu").append(menuNode);
            //报价计算
            addPrice();
        };
        //删除节点
        function removeNode(obj,menu_l){
            var parent=obj.parent().attr('class');
            switch(parent){
                case 'menuBox':
                    var per_data=obj.attr('data-id');
                     menu_l.each(function(){
                         var ms_data=$(this).attr('data-id');
                         if(ms_data==per_data){
                             $(this).remove();
                         }
                    });
                    //计算
                    obj.parents('.menuBox').find('span').each(function(){
                        if(!$(this).is('selected')){
                            $(this).removeClass('selected');
                        }
                    });
                    addPrice();
                break;
                case 'menu_select':
                    var per_data=obj.parent().attr('data-id');
                    obj.parent().remove();
                     menu_l.each(function(){
                         var ms_data=$(this).attr('data-id');
                         if(ms_data==per_data){
                            delClick($(this));
                            //计算
                            $(this).parents('.menuBox').find('span').each(function(){
                            if(!$(this).is('selected')){
                                $(this).removeClass('selected');
                            }
                            });
                            addPrice();
                         }
                    });
                break;
            };
        };
        //报价计算
        function addPrice(){
            var t_people_count=0;
            var t_people_price=0;
            var totalPrice=0;
            
            $.each($('.menu_left').find('span.selected'),function(){
                var people_count=$(this).attr('people_count');
                var total_people_price=$(this).attr('total_people_price');
                var total_price=$(this).attr('total_price');
                
                t_people_count += parseFloat(people_count);
                t_people_price += parseFloat(total_people_price);
                totalPrice += parseFloat(total_price);
            });
            $(".sel_menu #people_count").text(t_people_count);
            $(".sel_menu #total_people_price").text(t_people_price.toFixed());
            $(".sel_menu #total_price").text(totalPrice.toFixed());
        };
        
    };
	
	// 可能关注的项目 价格组合计算
	if($('.follow').length > 0){
        $('.con_c').on('click','label',function(){
            
            var input=$(this).find('input');
            var isc=input.prop("checked");
             
            var allcheckL=$('input[name="checkname"]').length;
            var labelL=$('.con_c .label').find('input[name=checkname]').length;
            if(!isc){
                $(this).addClass('label');
                input.prop("checked",true);  
            }else{
                $(this).removeClass('label');
                input.prop("checked",false);  
            };
            
            if(allcheckL==labelL){
                $("#allcheck").addClass('label');
                $("#allcheck").find("input").prop("checked",true); 
            }
            if(labelL==0){
                $("#allcheck").removeClass('label');
                $("#allcheck").find("input").prop("checked",false);
            }
            
            addPrice();
            
        });
        $('.open').on('click',function(){
            $(this).hide();
            $(this).parent().css('height','auto');
            $(this).prev().addClass('open_p');
        });
        $('.btn').on('click',function(){
            $('.open').show();
            $('.con_c').css('height','166px');
            $('.con_c ul').removeClass('open_p');
        });
        $('#allcheck').on('click',function(){
            
            if(!$(this).find('input').is(':checked')){
                $(this).addClass('label');
                $('input[name="checkname"]').each(function(){  
                    $(this).prop("checked",true); 
                    $(this).parent().addClass('label');
                });  
            }else{  
                $(this).removeClass('label');
                $('input[name="checkname"]').each(function(){  
                        $(this).removeAttr("checked",false); 
                        $(this).parent().removeClass('label');
                });  
            }  

          });
        
         //报价计算
        function addPrice(){
            var now_price=$('#now_price').attr('total_price');
            var totalPrice=parseFloat(now_price);
            
            $.each($('.con_c .label').find('input[name=checkname]'),function(n){
                var item_price=$(this).attr('total_price');
                totalPrice +=parseFloat(item_price);
            });
            
            $('.result_f1 #num').text($('.con_c .label').find('input[name=checkname]').length);
            $('.result_f2 #follow_price').text(totalPrice.toFixed(2));
        };
		
	};
    // 可能关注的项目 价格组合计算
    if($("#expect-btn").length>0){
		$("#expect-btn").click(function(){
			$(".shade-box").show();
			$(".shade-content").css("width",$(".banner-list-price").width());
			$("a.shade-close").click(function(){
				$(".shade-box").hide();
			});

			$(".shade-box").click(function(e){
				if($(e.target).attr("class")=="shade-box"){
					$(this).hide();
				}
			});
		});
	}
    //人才培养 人工报名资质审核 点击关闭遮罩层
	if($('.sign').length > 0){
        $("#diaBtn").click(function(){
            $("#dialog").fadeOut(1000);
            $("#zzc").css("display","none");
        });
    }
	
	
	//非建筑资质详情页面
	//页面滚动详情页导航固定
	if($(".bus-details-nav").length>0 && $(".bus-details-nav").hasClass("info-other")){
        /*var dH;
        if(!$(".bus-details-nav").hasClass("info-other")){
            console.log('0')
           dH=$(".bus-details-nav").offset().top;
        }else{
           dH=$(".certificate").offset().top;
        }*/
	var dH=$(".bus-details-nav").offset().top;
	
	$(window).scroll(function(){
		var scroH=$(document).scrollTop();
		if(scroH>dH){
			$(".bus-details").addClass("fixed")
		}else{
			$(".bus-details").removeClass("fixed")}
	})
	//业务详情导航
	$(".bus-details-nav ul li").click(function(){
		$(this).find("a").css({"color":"#4484ea"}).parent().siblings().find("a").css({"color":"#666"})
	})
	//业务详情Tab切换
	 $(".bus-details-con-main>ul>li").mouseover(function(){
	 	$(this).addClass("current").siblings().removeClass("current");
	 	var k=$(this).index();
	 	$(".bus-details-con-box").each(function(){
			var i=$(this).index();
	 		if(i==k){
	 			$(this).show()
	 		}else{
				$(this).hide()
				}
	 	})
	 })
	};
    if($(".bus-details-nav").length>0 && !$(".bus-details-nav").hasClass("info-other")){
	var dH=$(".bus_gd2_tabcontent").offset().top;
	
	$(window).scroll(function(){
		var scroH=$(document).scrollTop();
		if(scroH>dH){
			$(".bus-details").addClass("fixed")
		}else{
			$(".bus-details").removeClass("fixed")}
	})
    };
	 if($(".case-display").length>0){
	 	jQuery("#case-banner").slide({titCell:".case-ban-hover ul",mainCell:".case-ban-box .ser-wrap",autoPage:true,effect:"leftLoop",autoPlay:true,vis:1});
	 }
    
    //编辑人数
    function pNumChange(){
        $(".person_num").on('focus click',function(){
                $(this).attr('placeholder','');
            } );
        $(".tableList").on('change','.person_num',function(){
            $(this).attr('placeholder','');
            var person_peo=parseFloat($(this).parents('.list').find('.person_peo').text());
            var num=parseInt($(this).attr('data-person'));
            var now_peo=num;
            var price=$(this).parents('.list').find('.person_pc').text();
            var person_pc=0;
            var price_per=parseFloat($(this).parents('.table').find('.price_per').text());
            var price_per=0;
            if(price==''){
                person_pc=0;
            }else{
                person_pc=parseFloat($(this).parents('.list').find('.person_pc').text());
            }
            
            if($(this).val()==''){
                now_peo=num;
                $(this).attr('data-person',0);
                //人员费用
                var p_total=parseFloat(person_peo+now_peo)*person_pc;
                $(this).parents('.list').find('.person_tal').html(p_total.toFixed(2));
                
            }else {
                now_peo=parseInt($(this).val());
                $(this).attr('data-person',now_peo);
                
                //人员费用
                if(person_peo>=now_peo){
                    var p_total=parseFloat(person_peo-now_peo)*person_pc;
                    $(this).parents('.list').find('.person_tal').html(p_total.toFixed(2));
                }else{
                    $(this).parents('.list').find('.person_tal').html(0);
                }
                
            }
            
            $('.person_tal').each(function(){
                var ts=parseFloat($(this).text());
                price_per+=ts;
            });
            $(".price_per").text(price_per.toFixed(2));

        });
    };

    //企业用户中心tab切换
    if($(".comstate_content").length>0){
    	$(".company_tab_menu li").click(function(){
    		$(this).addClass("active").siblings().removeClass("active");
    		var k=$(this).index();
    		$(".company_new_transfer").each(function(index,value) {
    			if(index==k){
    				$(this).show();
    			}else{
    				$(this).hide();
    			}
    		})
    	})

    };
    /*转让求购*/
	if($('.transfer').length>0){
        //问题搜索
        if($(".transfer_main_title").length>0){
            $('#btn').on('click',function(){
                $('#searchForm').submit();
            })
        }
        
        $('.card1 select').on('change',function(){
            //选择资质等级 点击选中
            var select=$(this).find("option:selected").val();
            var sel_f2=$(this).find("option:selected");
            if(select!=0 && sel_f2){
                $(this).addClass("selected2");
                //下方显示选中项目
                var item=$(this).attr("id");
                switch(item){
                    case 'sysort':
                        var ser_id=$(this).find("option:selected").html();
                        $(".sel_items #parent_id").show().html(ser_id);
                        break;
                    case 'syitem':
                        var syitem=$(this).find("option:selected").html();
                        $(".sel_items #zizhi_id").show().html(syitem);
                        break;
                    case 'sylevel':
                        var sylevel=$(this).find("option:selected").html();
                        $(".sel_items #level").show().html(sylevel);
                        break;
                    case 'sco-per':
                        var sco_per=$(this).find("option:selected").html();
                        $(".sel_items #sco_id").show().html(sco_per);
                        break;
                };
            }else{
                $(this).removeClass("selected2");
                var name=$(this).attr("name");
                $(".sel_items span").each(function(){
                    var id=$(this).attr("id");
                    if(name===id){
                        $(this).hide();
                    }
                })
            };
        });
    };

    /*转让求购详情*/
	if($('.transfer-detail').length>0 || $('.news-container').length>0 || $('.qiyeAffi_wrapper').length>0){
        //收藏
        $('.collect').on('click',function(){
            zh.Collect($(this),$("#dialog1"),$("#zzc"));
        });
        //字符截取
        zh.subString($('.martop16 .r_gd2_main li a'),25);
        
    };

    
    //发布求购转让信息页面-省市二级联动city.js
    if($("select[name='selectp']").length>0){
    	first("selectp","selectc","cityForm",0,0);	
	} 
	
	if($(".transfer_form").length>0){

		//默认勾选信息协议不勾选不提交
		$(".list-input-sub").click(function(){
			if(!$("input[name='agreement']").is(':checked')){
				return false;
			}
		})
		

	}
	//发布的求购/转让用户操作交互
	if($(".company_oprate").length>0){
		$("select.company_oprate").change(function(){
			var oprateUrl=$(this).find("option:selected").attr("url");
			var val=$(this).find("option:selected").val();
			if(val=="修改"){
				window.location.href = oprateUrl;
			}else if(val=="请选择"){
				return false;
			}else{
				$.get(oprateUrl,function(){
					window.location.reload();
				})
			}			
		})
	}
    
    if($(".company_oprate_p").length>0){
		$("select.company_oprate_p").change(function(){
			var _this = $(this);
			var oprateUrl=_this.find("option:selected").attr("url");
			var operate=_this.find("option:selected").val();
			switch(operate){
				case "刷新":
					$.post(oprateUrl,{
						'id':_this.attr("data-id"),
						'_csrf':$("#_csrf").val(),
					},function(data){
						if(data.result){
							_this.parents("tr").find(".update_time").text(zh.getLocalTime(data.new_time));
						}
					},'json');
					window.location.reload();
					return false;
					break;
				case "删除":
						if(confirm('确定要删除吗')){
							$.post(oprateUrl,{
								'id':_this.find("option:selected").attr("data-id"),
								'_csrf':$("#_csrf").val(),
							},function(data){
								if(data.result==1){
									_this.parents("tr").remove();
								}
							},'json');
						}
					window.location.reload();
					return false;
					break;

				case "设为默认":
					$.post(oprateUrl,{
						'id':_this.find("option:selected").attr("data-id"),
						'_csrf':$("#_csrf").val(),
					},function(data){
						if(data.result){
							window.location.reload();
						}
					},'json');
					return false;
					break;

				case "请选择":
					return false;
					break;

				default:
					window.location.href = oprateUrl;
					break;
			}
		})
	}
	//企业认证跳转
	if($(".company_new_text strong").length>0){
		var obj=$(".company_new_text");
		var num=parseInt(obj.find("strong").text());
		var url=obj.find("strong").next("a").attr("href");
		setTimeout(function(){
			if(num>0){
				num--;	
				obj.find("strong").text(num);
				setTimeout(arguments.callee,1000);
			}else{
				window.location.href=url;
			}
		},1000);
	}
    
    
    /*行家解读轮播*/
	if($(".banner-index-news").length>0 || $(".banner-about-view").length>0){
		(function(){
			/*banner轮播图交互*/
			zh.index=0;
			zh.bannerObj=$("#banner-img-01>li");
			zh.objHover=$("#banner-hover-01>li");
			//加载悬停按钮
			zh.addHover();
			//显示首张图片
			zh.bannerObj.eq(0).show();
			//轮播自动加载
			var autoImg=function(){
				zh.timer=setTimeout(function(){
						zh.playImg();
						zh.timer=setTimeout(arguments.callee,4000);
					},4000);
			}
	
			autoImg();
	
			//按钮悬停交互
			/*$("#banner-hover-01>li>a").hover(function(e){
				e.stopPropagation();
				zh.index=$(this).index();
				zh.showImg();
			},function(){});*/
	
			//轮播图主体交互
			$(".banner-list-main1").on("mouseover mousemove",function(){
				clearTimeout(zh.timer);
			}).mouseleave(function(){
				autoImg();
			});
	
			//左右导航按钮
			$(".banner-guide").click(function(){
				var dire=$(this).hasClass("left");
				switch(dire){
					case true:
						zh.index=zh.index-1;
						if(zh.index<0){
							zh.index=zh.bannerObj.length-1;
						}
						zh.showImg();
					break;
	
					case false:
					    zh.index=zh.index+1;
					    if(zh.index>zh.bannerObj.length-1){
						   zh.index=0;
						}
					    zh.showImg();
					break;
				}
			});	
			
		})();
	};
    
    
    /*行家解读页面交互*/
	if($(".news-container").length>0){
		/*$(".news-card-title>dd>a").click(function(){
			$(this).addClass("active").siblings().removeClass("active");
			var index=$(this).index();
			var $part=$(this).parents("dl").siblings(".news-card-content").children(".content-part");
			$part.eq(index).addClass("active").siblings().removeClass("active");console.log($part)
			return false;
		});*/

		$(".sider-hot>dt>a,.sider-push>dt>a").click(function(){
			$(this).addClass("active").siblings().removeClass("active");
			var index=$(this).index();
			var $sider_ul=$(this).parent("dt").siblings("dd").children("ul");
			$sider_ul.eq(index).addClass("active").siblings().removeClass("active");
			return false;
			});
        //右侧列表
        $(".sider-hot .side-li-disc li:not('.more')").on('click',function(){
            $(this).toggleClass("active");
			$(this).siblings("li").removeClass("active");

        });
        //问题搜索
        if($(".searchBox").length>0){
            $('#btn').on('click',function(){
                $('#searchForm').submit();
            })
        }
	};
	//教育培训-sem增加index样式名
	if($("#edu_sem").length>0){
		$("#edu_sem").parents(".wrapper").addClass("index edu-wrapper")
	};
    
    //企业挂证发布详情
    if($(".qy_sider").length>0){
        $("select.sort").on('change click',function(){
            var optgroup=$("option:selected",this).parent("optgroup").attr('label');
			if(optgroup=="---职称证书---"){
                $('.level').show();
                
			}else{
                $('.level').hide();
				return false;
			}		
		})
        //合同快到期交互
        $('#zhengshu_status input').on('click',function(){
            if($(this).is(':checked') && $(this).val()==3){
                $('#zhengshu_status').next('.hide').show();
            }else{
                $('#zhengshu_status').next('.hide').hide();
            }
        })
    };
    //个人中心-发布的招聘
	if($(".issuJl_r_menu").length>0){
		$(".del").on('click',function(){
            $(this).parents('.issuJl_table_content').remove();
        })
	};
     //未登录点击免费人工发布
	if($(".apply").length>0){
		$(".wrapper ").css({'background':'#f9f9f9'});
	};
     //导航下滑悬浮
    $(function(){
        var height=$(".header").height();
        $(window).scroll(function() {
            $(document).scrollTop() >= height ? $(".newnav").show() : $(".newnav").hide();
        });
        
    })
	
    /*首页人才信息*/
	if($(".partime").length > 0){
        $('.section-slogan').css('marginTop','0');
    } 
    
   	 if($(".price_type").length>0){
         $(".person_num").on('focus click',function(){
                $(this).attr('placeholder','');
            } );
      }
     // 商务合作
	if($('.apply_form').length > 0){
        var unSelected = "#d3d3d3";
        var selected = "#333";
        $(function () {
        $("select").css("color", unSelected);
        $("option").css("color", selected);
        $("select").change(function () {
        var selItem = $(this).val();
        if (selItem == $(this).find('option:first').val()) {
        $(this).css("color", unSelected);
        } else {
        $(this).css("color", selected);
        }
        });
        })
    }
    
    // 页面左侧悬浮框效果
	if($('.fixed-left').length > 0){
        $('.botlist .freephone').on('click',function(){
			 $('.fixed-phone').fadeToggle();
		})
	}
    if($('.fixed-bar-top').length > 0){
        (function(){
            //页面返回顶部效果
            $(".fixed-bar-top").click(function(){
                $('body,html').animate({scrollTop:0},500);
                return false;
            });
            /*左侧导航栏交互*/
            var scrollFlag=true;
            $(document).scroll(function(){
                if($(document).scrollTop()>80&&scrollFlag){
                    $(".fixed-bar-top").stop().fadeIn();
                    scrollFlag=false;
                }else if($(document).scrollTop()<80&&!scrollFlag){
                    $(".fixed-bar-top").stop().fadeOut();
                    scrollFlag=true;
                }
            });

        })();
    }
    
    //实时播报
    if($(".banner-report").length>0){
        var box=document.getElementById("banner-report-ul");
        zh.ScrollTop(box,50,0,10,1500,1000);
    };
    //资质详情底部转让悬浮
    if($(".float_botBox").length>0){
        var box=document.getElementById("float_bot")
        zh.ScrollTop(box,220,17,1,7000,7000);
    }
    
});









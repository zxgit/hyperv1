<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>聊天测试模板me</title>
		<link rel="stylesheet" href="css/amazeui.min.css" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<div class="box">
			<div class="wechat">
				
				<div class="sidestrip">
					<div class="am-dropdown" data-am-dropdown>
						<!--头像插件-->
						<div class="own_head am-dropdown-toggle"></div>
						<div class="am-dropdown-content">
					    	<div class="own_head_top">
					    		<div class="own_head_top_text">
					    			<p class="own_name">彭于晏丶plus<img src="images/icon/head.png" alt="" /></p>
					    			<p class="own_numb">微信号：test001</p>
					    		</div>
					    		<img src="images/own_head.jpg" alt="" />
					    	</div>
					    	<div class="own_head_bottom">
					    		<p><span>地区</span>江西 九江</p>
					    		<div class="own_head_bottom_img">
					    			<a href=""><img src="images/icon/head_1.png"/></a>
					    			<a href=""><img src="images/icon/head_2.png"/></a>
					    		</div>
					    	</div>
					  	</div>
					</div>
					<!--三图标-->
				  	<div class="sidestrip_icon">
				  		<a id="si_1" style="background: url(images/icon/head_2_1.png) no-repeat;"></a>
				  		<a id="si_2"></a>
				  		<a id="si_3"></a>
				  	</div>
				  	
				  	<!--底部扩展键-->
				  	<div id="doc-dropdown-justify-js">
				  		<div class="am-dropdown" id="doc-dropdown-js" style="position: initial;">
					  		<div class="sidestrip_bc am-dropdown-toggle"></div>
					  	    <ul class="am-dropdown-content" style="">
							    <li>
							    	<a href="#" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">意见反馈</a>
							    	<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
									  <div class="am-modal-dialog">
									    <div class="am-modal-hd">Modal 标题
									      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
									    </div>
									    <div class="am-modal-bd">
									      Modal 内容。本 Modal 无法通过遮罩层关闭。
									    </div>
									  </div>
									</div>
							    </li>
							    
							    <li><a href="#">备份与恢复</a></li>
							    <li><a href="#">设置</a></li>
						    </ul>
					    </div>	
					</div>	
				</div>
				
				<!--聊天列表-->
				<div class="middle on">
					<div class="wx_search">
						<input type="text" placeholder="搜索"/>
						<button>+</button>
					</div>
					<div class="office_text">
						<ul class="user_list">
							<li class="user_active">
								<div class="user_head"><img src="images/head/15.jpg"/></div>
								<div class="user_text">
									<p class="user_name">老丁</p>
									<p class="user_message">老丁说他吃鸡率高达50%</p>
                                    <input type="hidden" value="1" id="userId" name="userId">
								</div>
								<div class="user_time">下午 2：54</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/2.jpg"/></div>
								<div class="user_text">
									<p class="user_name">凯子</p>
									<p class="user_message">[小程序]</p>
								</div>
								<div class="user_time">上午 11：03</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/3.jpg"/></div>
								<div class="user_text">
									<p class="user_name">十里老街秋名山车神车队</p>
									<p class="user_message">乞讨两块交个话费</p>
								</div>
								<div class="user_time">昨天</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/4.jpg"/></div>
								<div class="user_text">
									<p class="user_name">我自己/p>
									<p class="user_message">[动画表情]</p>
								</div>
								<div class="user_time">昨天</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/5.jpg"/></div>
								<div class="user_text">
									<p class="user_name">测试2</p>
									<p class="user_message">庐山国际水彩艺术节：</p>
								</div>
								<div class="user_time">星期三</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/6.jpg"/></div>
								<div class="user_text">
									<p class="user_name">测试3</p>
									<p class="user_message">槟榔的100种吃法</p>
								</div>
								<div class="user_time">星期二</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/7.jpg"/></div>
								<div class="user_text">
									<p class="user_name">文件传输助手</p>
									<p class="user_message"></p>
								</div>
								<div class="user_time">星期二</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/8.jpg"/></div>
								<div class="user_text">
									<p class="user_name">陈明杰</p>
									<p class="user_message">妈的，你在聊我</p>
								</div>
								<div class="user_time">星期四</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/9.jpg"/></div>
								<div class="user_text">
									<p class="user_name">妈</p>
									<p class="user_message">面</p>
								</div>
								<div class="user_time">星期四</div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/10.jpg"/></div>
								<div class="user_text">
									<p class="user_name">土豆</p>
									<p class="user_message">[图片]</p>
								</div>
								<div class="user_time"></div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/11.jpg"/></div>
								<div class="user_text">
									<p class="user_name">Emmera</p>
									<p class="user_message"></p>
								</div>
								<div class="user_time"></div>
							</li>
							<li>
								<div class="user_head"><img src="images/head/12.jpg"/></div>
								<div class="user_text">
									<p class="user_name">彭于晏丶plus</p>
									<p class="user_message">我送20个都他妈的能赢，这群鬼人真的恐怖</p>
								</div>
								<div class="user_time"></div>
							</li>
						</ul>
					</div>	
				</div>
			    
			    <!--好友列表-->
				<div class="middle">
					<div class="wx_search">
						<input type="text" placeholder="搜索"/>
						<button>+</button>
					</div>
					<div class="office_text">
						<ul class="friends_list">
							<li>
								<p>新的朋友</p>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/1.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">新的朋友</p>
									</div>
								</div>
							</li>
							<li>
								<p>公众号</p>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/2.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">公众号</p>
									</div>
								</div>
							</li>
							<li>
								<p>A</p>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/3.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">彭于晏丶plus</p>
									</div>
								</div>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/4.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">陈依依</p>
									</div>
								</div>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/5.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">毛毛</p>
									</div>
								</div>
							</li>
							<li>
								<p>B</p>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/6.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">苏笑言</p>
									</div>
								</div>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/7.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">往事不再提</p>
									</div>
								</div>
							</li>
							<li>
								<p>C</p>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/8.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">夏继涛</p>
									</div>
								</div>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/9.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">早安无恙</p>
									</div>
								</div>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/10.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">王鹏</p>
									</div>
								</div>
							</li>
							<li>
								<p>D</p>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/11.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">涨了潮了</p>
									</div>
								</div>
								<div class="friends_box">
									<div class="user_head"><img src="images/head/12.jpg"/></div>
									<div class="friends_text">
										<p class="user_name">Ktz丶中融资</p>
									</div>
								</div>
							</li>
						</ul>
					</div>	
				</div>
				
				<!--程序列表-->
				<div class="middle">
					<div class="wx_search">
						<input type="text" placeholder="搜索收藏内容"/>
						<button>+</button>
					</div>
					<div class="office_text">
						<ul class="icon_list">
							<li class="icon_active">
								<div class="icon"><img src="images/icon/icon.png" alt="" /></div>
								<span>全部收藏</span>
							</li>
							<li>
								<div class="icon"><img src="images/icon/icon1.png" alt="" /></div>
								<span>链接</span>
							</li>
							<li>
								<div class="icon"><img src="images/icon/icon2.png" alt="" /></div>
								<span>相册</span>
							</li>
							<li>
								<div class="icon"><img src="images/icon/icon3.png" alt="" /></div>
								<span>笔记</span>
							</li>
							<li>
								<div class="icon"><img src="images/icon/icon4.png" alt="" /></div>
								<span>文件</span>
							</li>
							<li>
								<div class="icon"><img src="images/icon/icon5.png" alt="" /></div>
								<span>音乐</span>
							</li>
							<li>
								<div class="icon"><img src="images/icon/icon6.png" alt="" /></div>
								<span>标签</span>
							</li>
						</ul>
					</div>	
				</div>
			
				<!--聊天窗口-->
				<div class="talk_window">
					<div class="windows_top">
						<div class="windows_top_box">
							<span>早安无恙</span>
							<ul class="window_icon">
								<li><a href=""><img src="images/icon/icon7.png"/></a></li>
								<li><a href=""><img src="images/icon/icon8.png"/></a></li>
								<li><a href=""><img src="images/icon/icon9.png"/></a></li>
								<li><a href=""><img src="images/icon/icon10.png"/></a></li>
							</ul>
							<div class="extend" class="am-btn am-btn-success" data-am-offcanvas="{target: '#doc-oc-demo3'}"></div>
							<!-- 侧边栏内容 -->
							<div id="doc-oc-demo3" class="am-offcanvas">
							    <div class="am-offcanvas-bar am-offcanvas-bar-flip">
								    <div class="am-offcanvas-content">
								    	<p><a href="http://music.163.com/#/song?id=385554" target="_blank">网易音乐</a></p>
								    </div>
							    </div>
							</div>
						</div>
					</div>
					
					<!--聊天内容-->
					<div class="windows_body">
						<div class="office_text" style="height: 100%;">
							<ul class="content" id="chatbox">
								<li class="me"><img src="images/own_head.jpg" title="金少凯"><span>我说1</span></li>
								<li class="other"><img src="images/head/15.jpg" title="张文超"><span>你说2</span></li>
							</ul>
						</div>
					</div>
					
					<div class="windows_input" id="talkbox">
						<div class="input_icon">
							<a href="javascript:;"></a>
							<a href="javascript:;"><input type="file" id="file" onchange="readAsDataURL()" name="selectImg" style="opacity: 0"></a>
							<a href="javascript:;"></a>
							<a href="javascript:;"></a>
							<a href="javascript:;"></a>
							<a href="javascript:;"></a>
						</div>
						<div class="input_box">
                            <div id="input_box" contenteditable="true" style="height:65px;"></div>
							<button id="send">发送（S）</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/amazeui.min.js"></script>
	<script type="text/javascript" src="js/zUI.js"></script>
	<script type="text/javascript" src="js/wechat.js"></script>
	
	<script type="text/javascript">
        var wsServer = 'ws:192.168.20.6:9550?userId=2';
        var websocket = new WebSocket(wsServer);
        var content = '';

		//三图标
		window.onload=function(){
		    //建立websocket
            websocket.onopen = function (evt) {
                //addLine("Connected to WebSocket server.");
            };

            websocket.onclose = function (evt) {
                var text = document.getElementById('input_box');
                var chat = document.getElementById('chatbox');
                var talk = document.getElementById('talkbox');
                var jsonobj = eval("("+evt.data+")");
                chat.scrollTop=chat.scrollHeight;
                chat.innerHTML += '<li class="other"><img src="'+'images/own_head.jpg'+'"><span>'+"连接已中断"+'</span></li>';
                talk.style.background="#fff";
                text.style.background="#fff";
            };

            websocket.onmessage = function (evt) {
                var text = document.getElementById('input_box');
                var chat = document.getElementById('chatbox');
                var talk = document.getElementById('talkbox');
                var jsonobj = eval("("+evt.data+")");
                chat.scrollTop=chat.scrollHeight;
                chat.innerHTML += '<li class="other"><img src="'+'images/own_head.jpg'+'"><span>'+jsonobj.content+'</span></li>';
                talk.style.background="#fff";
                text.style.background="#fff";
            };

            websocket.onerror = function (evt, e) {
                addLine('Error occured: ' + evt.data);
            };



			function a(){
				var si1 = document.getElementById('si_1');
				var si2 = document.getElementById('si_2');
				var si3 = document.getElementById('si_3');
				si1.onclick=function(){
					si1.style.background="url(images/icon/head_2_1.png) no-repeat"
					si2.style.background="";
					si3.style.background="";
				};
				si2.onclick=function(){
					si2.style.background="url(images/icon/head_3_1.png) no-repeat"
					si1.style.background="";
					si3.style.background="";
				};
				si3.onclick=function(){
					si3.style.background="url(images/icon/head_4_1.png) no-repeat"
					si1.style.background="";
					si2.style.background="";
				};
			};
			function b(){
				var text = document.getElementById('input_box');
				var chat = document.getElementById('chatbox');
				var btn = document.getElementById('send');
				var talk = document.getElementById('talkbox');
				btn.onclick=function(){
					if(text.value ==''){
			            alert('不能发送空消息');
			        }else{
                        chat.scrollTop=chat.scrollHeight;
                        talk.style.background="#fff";
                        text.style.background="#fff";
						//发送消息给对方
                        //content = content+"#@#"+$("#says").val();
                        var userId  = $("#userId").val();
                        websocket.send(JSON.stringify({
                            sendUserId:2,
                            receiveUserId:userId,
                            content:text.innerHTML
                        }));

                        var sendContent =  text.innerHTML .replace('<img','#@#<img');
                        sendContent     = sendContent.replace('height="30px">','height="30px">#@#');
                        var arr         = sendContent.split('#@#');
                        //console.log(arr);
                        for (var i=0;i<arr.length;i++)
                        {
                            if(arr[i]) {
                                chat.innerHTML += '<li class="me"><img src="'+'images/own_head.jpg'+'"><span>'+arr[i]+'</span></li>';
                            }
                        }
                        //判断是否存在图片，存在切割成多个展示
                        text.innerHTML = '';//清空输入框得数据
					};
				};
			};
			a();
			b();
		};

        //实现图片预览
        function readAsDataURL(){
            //检验是否为图像文件
            var file = document.getElementById("file").files[0];
            if(!/image\/\w+/.test(file.type)){
                alert("看清楚，这个需要图片！");
                return false;
            }
            var reader = new FileReader();
            //将文件以Data URL形式读入页面
            reader.readAsDataURL(file);
            reader.onload=function(e){
                //显示文件
                var result=document.getElementById("input_box");
                result.innerHTML += '<img src="' + this.result +'" alt="" width="200px" height="30px" />';
            }
        }
	</script>
	</body>
</html>

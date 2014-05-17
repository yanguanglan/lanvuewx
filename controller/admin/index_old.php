<?php 
$index = array(
		array(
				'name' => $_SERVER['WEB_NAME'],
				'sub' => array(
						array(
								'name'=>'账号信息',
								'file'=>'userCenter/myAccount'
						),
						array(
								'name'=>'修改密码',
								'file'=>'userCenter/updatePwd'
						),
		
						array(
								'name'=>'公共账号管理',
								'file'=>'userCenter/pubs'
						),
						array(
								'name'=>'运营图表',
								'file'=>'userCenter/statisticalData'
						)
						
				)
		),
		array(
				'name' => '素材库',
				'sub' => array(
						array(
								'name'=>'首次关注',
								'file'=>'baseService/firstAttention'
						),
						array(
								'name'=>'关键字回复',
								'file'=>'baseService/keyWordReply'
						),

						array(
								'name'=>'素材管理',
								'file'=>'baseService/contresource'
						),
						array(
								'name'=>'LBS设置',
								'file'=>'baseService/lbs'
						)
				)
		  ),
		array(
				'name' => '智能客服',
				'sub' => array(
						array(
								'name'=>'客服调教',
								'file'=>'baseService/intelligentServiceGuide'
						)
				)
		),
		array(
				'name' => '微信服务',
				'sub' => array(
						array(
								'name'=>'应用管理',
								'file'=>'userCenter/sysapp'
						)
				)
		),
		array(
				'name' => '自定义菜单',
				'sub' => array(
						array(
								'name'=>'授权设置',
								'file'=>'baseService/customSecImpower'
						),
						array(
								'name'=>'菜单设置',
								'file'=>'baseService/customMenu'
						 )
				       )
		      ),
		array(
				'name' => '微活动',
				'sub' => array(
						array(
								'name'=>'优惠券',
								'file'=>'marketingPromotion/discountCoupon'
						),
						array(
								'name'=>'刮刮卡',
								'file'=>'marketingPromotion/ggk'
						),
						array(
								'name'=>'幸运机',
								'file'=>'marketingPromotion/xyj'
						),
						array(
								'name'=>'大转盘',
								'file'=>'marketingPromotion/xydzp'
						),
						array(
								'name'=>'一站到底',
								'file'=>'marketingPromotion/yzdd'
						),
						array(
								'name'=>'一站到底题库管理',
								'file'=>'marketingPromotion/yzddtk'
						)
						
						
				)
		),
		array(
				'name' => '360全景图',
				'sub' => array(
						array(
								'name'=>'全景图管理',
								'file'=>'no/no'
						),
				)
		),
		array(
				'name' => '微吧',
				'sub' => array(
						array(
								'name'=>'微吧配置',
								'file'=>'marketingPromotion/weiba'
						),
						array(
								'name'=>'话题管理',
								'file'=>'marketingPromotion/weibaht'
						)
				)
		),
		
		array(
				'name' => '微留言',
				'sub' => array(
						array(
								'name'=>'留言板设置',
								'file'=>'liuyan/set'
						),
						array(
								'name'=>'留言管理',
								'file'=>'liuyan/mg'
						),
						array(
								'name'=>'黑名单管理',
								'file'=>'liuyan/hei'
						)
				)
		),
		/**
		array(
				'name' => '微留言',
				'sub' => array(
						array(
								'name'=>'留言板设置',
								'file'=>'no/no'
						),
						array(
								'name'=>'留言管理',
								'file'=>'no/no'
						),
						array(
								'name'=>'黑名单管理',
								'file'=>'no/no'
						)
				)
		),**/
		 array(
				'name' => '微相册',
				'sub' => array(
						array(
								'name'=>'相册设置',
								'file'=>'xiangce/set'
						),
						array(
								'name'=>'相册管理',
								'file'=>'xiangce/list'
						)
				)
		), 
		
		array(
				'name' => '微房产',
				'sub' => array(
						array(
								'name'=>'楼盘简介',
								'file'=>'fangchan/loupanjianjie'
						),
						array(
								'name'=>'楼盘海报',
								'file'=>'fangchan/loupanhaibao'
						),						
						array(
								'name'=>'子楼盘',
								'file'=>'fangchan/ziloupan'
						),
						array(
								'name'=>'楼盘户型',
								'file'=>'fangchan/loupanhuxing'
						),
						array(
								'name'=>'楼盘相册',
								'file'=>'fangchan/loupanxiangce'
						),
						array(
								'name'=>'房友印象',
								'file'=>'fangchan/fangyouyinxiang'
						),
						array(
								'name'=>'专家点评',
								'file'=>'fangchan/zhuanjiadianping'
						)
				)
		),
		array(
				'name' => '微酒店',
				'sub' => array(
						array(
								'name'=>'酒店管理',
								'file'=>'jiudian/set'
						),	
				)
		),
		array(
				'name' => '微喜帖',
				'sub' => array(
						 array(
								'name'=>'功能设置',
								'file'=>'xitie/index'
						    )
				         )
		      ), 
		array(
				'name' => '微汽车',
				'sub' => array(
						array(
								'name'=>'品牌管理',
								'file'=>'car/pinpai'
						),
						array(
								'name'=>'车系管理',
								'file'=>'car/chexi'
						),
						array(
								'name'=>'车型管理',
								'file'=>'car/chexing'
						),
						array(
								'name'=>'销售管理',
								'file'=>'car/xiaoshou'
						),
						array(
								'name'=>'预约保养',
								'file'=>'car/yyby'
						),
						array(
								'name'=>'预约试驾',
								'file'=>'car/yysj'
						),
						array(
								'name'=>'车主关怀',
								'file'=>'car/guanhuai'
						),
						array(
								'name'=>'实用工具',
								'file'=>'car/tool'
						),
						array(
								'name'=>'关键字回复',
								'file'=>'car/keyword'
						),
				)
		),
		array(
				'name' => '微医疗',
				'sub' => array(
						array(
						'name'=>'挂号设置',
						'file'=>'no/no'
						),
						array(
						'name'=>'内容设置',
						'file'=>'no/no'
						),
						array(
						'name'=>'预约查询',
						'file'=>'no/no'
						),
						array(
						'name'=>'预约统计',
						'file'=>'no/no'
						),
				)
		),
		array(
				'name' => '微餐饮',
				'sub' => array(
						array(
								'name'=>'微餐饮管理',
								'file'=>'adds/canyin'
						),
				)
		),
		array(
				'name' => '微商城',
				'sub' => array(
						array(
								'name'=>'微商城管理',
								'file'=>'adds/shangcheng'
						),
				)
		),
		array(
				'name' => '微客服',
				'sub' => array(
						array(
								'name'=>'微信客服系統',
								'file'=>'no/no'
						),
				)
		),
		array(
				'name' => '微信会员卡',
				'sub' => array(
						array(
								'name'=>'会员卡设置',
								'file'=>'businessModule/microMemberCard'
						),
						array(
								'name'=>'会员卡添加',
								'file'=>'businessModule/microMemberCardAdd'
						)		
				)
		),
		array(
				'name' => '微团购',
				'sub' => array(
						array(
								'name'=>'微团购设置',
								'file'=>'businessModule/microGroupBuy'
						),
						array(
								'name'=>'微团购新增',
								'file'=>'businessModule/microGroupBuyAdd'
						)
		
				)
		),
		array(
				'name' => '微官网',
				'sub' => array(
						array(
								'name'=>'模板预览',
								'file'=>'web/setview'
						),
						array(
								'name'=>'微官网设置',
								'file'=>'businessModule/wsite'
						)
						
				)
		),
		array(
				'name' => '微调研',
				'sub' => array(
						array(
								'name'=>'调研管理',
								'file'=>'businessModule/microSurvey'
						),
						array(
								'name'=>'调研新增',
								'file'=>'businessModule/microSurveyAdd'
						)
		
				)
		),
		array(
				'name' => '微预约',
				'sub' => array(
						array(
								'name'=>'预约管理',
								 'file'=>'businessModule/onlineBooking'
							//	'file'=>'businessModule/booking'
						),
						array(
								'name'=>'预约新增',
								'file'=>'businessModule/onlineBookingAdd'
							//	'file'=>'businessModule/bookingadd'
						)						
				)
		),
		array(
				'name' => '微投票',
				'sub' => array(
						array(
								'name'=>'微投票管理',
								'file'=>'businessModule/microVote'
						),
						array(
								'name'=>'微投票新增',
								'file'=>'businessModule/microVoteAdd'
						)
				)
		),
		array(
				'name' => '微门店',
				'sub' => array(
						array(
								'name'=>'微门店管理',
								'file'=>'businessModule/shop'
						),
						array(
								'name'=>'微门店新增',
								'file'=>'businessModule/shopadd'
						)
				)
		)
		

);
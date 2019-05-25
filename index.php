<?php
// include autoloader
require_once './dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

$html = '<!DOCTYPE html><html lang="zh-CN">
<head>
<meta charset="utf-8"/>
<style>
html { font-family: simkai; }
</style>
</head>
<body >
<div>这他么的测试一下真个神经病不他么的放字体</div>
	
</body>
</html>';

$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
html { font-family: simkai; }
</style>
<body>
	<div class="wrapper">
		<div class="title">合同协议</div>
		<div class="header">
			<table width="600" height="70" class="table">
				<tr bgcolor="white">
					<td width="250">（甲方）：</td>
					<td>公司名称(健身房名称)</td>
				</tr>
				<tr bgcolor="white">
					<td width="250">（联系电话）：</td>
					<td>***********41m</td>
				</tr>
			</table>

			<table width="600" height="100" class="table">
				<tr bgcolor="white">
					<td width="250">（乙方）（姓名）：</td>
					<td>***********41m</td>
				</tr>
				<tr bgcolor="white">
					<td>（乙方）（联系电话）：</td>
					<td>***********41m</td>
				</tr>
				<tr bgcolor="white">
					<td>身份证号：</td>
					<td>***********41m</td>
				</tr>
			</table>

		<div class="content">
			第二条：【租金及支付方式】
1.房屋租金每月为税前人民币780.00元大写（柒佰捌拾元整），物管费为每月房租的12％，租期内物管费首
次付款时全额支付。水费为一人每月30元、二人每月50元，房屋租金支付方式押1付二月付，后期提前15天
付款，采暖费按一个自然月的房租取，并于每年10月15日前缴纳至甲方指定账户。
甲方指定收款账户：
①农业银行：（石家庄东方支行） 6228 4806 3880 3533 279 开户名：徐建龙；
②支付宝：138 3210 3726 徐建龙 (特别提醒：除甲方指定账户外，其他转账账户视为无效打款）。
第三条：【保证金及其他费用】
1.乙方缴纳押金￥700.00元（大写柒佰元整 ）作为保证金，保证金作为乙方不损坏房屋结构、设施、家具
、电器以及不拖欠水、电、燃气、物业等使用费用的保证。
2.保证金不允许充抵房租，合同期满乙方结清全部费用并协助甲方完成退房手续后，甲方仅以转账形式将
所收保证金余款在七个工作日内退还至乙方指定账户。
第四条：【双方的义务】
1.乙方应按照本合同规定的期限向甲方缴纳租金，逾期不交租金视为违约。若乙方合同期内单方终止合同
，经甲方同意后可以选择以下方式解除合同：①赔偿甲方两个月房租作为违约金，甲方将该房屋租金、水
电煤气等费用扣除后，余款退还乙方。②在无拖欠房租及任何费用的前提下，乙方可选择与甲方签订《转
租协议》，待转租成功后，乙方向甲方支付半个月租金作为转租费用，其余费用结清后，剩余房租及押金
退还乙方。
2.乙方承租该房屋期间，应自觉遵守【YOHO合家入住管理条例】，不得将该房屋转租、转借、转让、抵
押，不得利用该房屋进行违法活动，否则甲方有权收回该房屋，所收费用不予退还且由此造成的经济损失
由乙方承担。
3，甲方负责审验出租房源产权证、业主身份证等基本信息的真实性，保证乙方租住的合法性。
4，乙方须保持房屋内各区域的干净整洁，禁止将垃圾堆放在公共区域，甲方将提供房屋内餐厅、厨房、
卫生间一个月两次深度保洁的服务
5,合同到期前10天，乙方须配合甲方带新客户看房。
第五条：【维修责任】
甲方维修责任：
1.房内水管、总阀门老化破损、漏水、爆裂；
2.因防水层、坐便器管道、房屋其他管道等出现漏水，影响乙方或楼下邻居生活的；
3.因电表、闸盒、电路、电线老化、电卡等问题导致乙方无法正常用电；
		</div>
		<div class="agreement">
			<div class="image_left image">
				<image src="http://199fit.com/images/wechat/zhang.png">
			</div>
			<div class="image_right image">
				<image src="http://199fit.com/images/wechat/zhang.png">
			</div>
		</div>
		<div class="foot"></div>
	</div>
</body>
<style type="text/css">
	body{
		margin: 0 auto;
		background: #ccc;
	}
	.wrapper{
		width: 700px;
		height: 1000px;
		/*height: 100%;*/
		margin: 0 auto;
		background: #fff;
		padding: 0;
		padding: 20px;
	}

	.title{
		width: 300px;
		height: 50px;
		/*background: #ccc;*/
		font-size: 20px;
		margin: 0 auto;
		text-align: center;
		line-height: 50px;
	}

	.header{
		/*background: red;*/
		margin-top: 20px;
		/*height: 500px;*/
		
	}
	.table{
		background: #ccc;
	}
	.header_conent{
		margin: 10px 0 0 0;
		background: #9bf;
	}
	.content{
		margin: 20px 30px 20px 30px;
	}
	.agreement{
		margin: 50px;
		/*background: red;*/
	}
	.image_left{
		float: left;
		border: 1px solid #ccc;
		margin-right: 10px;
		/*background: #9bf;*/
	}
	.image_right{
		margin-right: 50px;
		float: left;
		border: 1px solid #ccc;
		/*background: red;*/
	}
	.image img{
		margin: 10px 30px;
		width: 180px;
		height: 180px;
	}

</style>
</html>




';
echo 'pdf已生成';

// // instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

//print_r($dompdf);
// Output the generated PDF to Browser
$dompdf->stream();
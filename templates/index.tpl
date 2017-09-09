<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>{if $title}{$title} | {/if}空き山バンク</title>
{include file='html_head.tpl'}
</head>
<body>
{include file='header.tpl'}

<div class="container">

	{foreach from=$list item=data}
	<div class="forestdata">
		<div class="forestdata_title"><span style="font-size:0.8em;">ID:</span> <span style="font-weight:bold;">{$data.id}</span></div>
		<div class="forestdata_item_area">
			<table>
				<tr>
					<td class="forestdata_item">住所</td>
					<td>
						<div>{$data.address}</div>
						<iframe src="http://maps.google.co.jp/maps?q={$data.place.lat},{$data.place.lon}&output=embed&t=m&z=16&hl=ja" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</td>
				</tr>
				<tr>
					<td class="forestdata_item">面積</td>
					<td>{$data.area} m<sup>2</sup></td>
				</tr>
				<tr>
					<td class="forestdata_item">材積（1ha辺り）</td>
					<td>{$data.volume} m<sup>3</sup></td>
				</tr>
				<tr>
					<td class="forestdata_item">樹種</td>
					<td>ひのき、まつ</td>
				</tr>
				<tr>
					<td class="forestdata_item">保安林等の制限</td>
					<td>{if $data.limitation eq true}あり{else}なし{/if}</td>
				</tr>
				<tr>
					<td class="forestdata_item">路網の整備状況</td>
					<td>{$data.route}</td>
				</tr>
				<tr>
					<td class="forestdata_item">備考</td>
					<td>{$data.note}</td>
				</tr>
			</table>
		</div>
		<div class="btn btn-primary">所有者に連絡する</div>
	</div>
	{/foreach}

</div>

{include file='footer.tpl'}
</body>
</html>
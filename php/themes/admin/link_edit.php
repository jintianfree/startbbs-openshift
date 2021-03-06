<!DOCTYPE html><html><head><meta content='' name='description'>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title><?=$title?> - 管理后台 - <?=$settings['site_name']?></title>
<?php $this->load->view ( 'header-meta' ); ?>
</head>
<body id="startbbs">
<?php $this->load->view ( 'header' ); ?>

<div id="wrap">
<div class="container" id="page-main">
<div class="row">

<?php $this->load->view ('leftbar');?>

<div class='span8'>

<div class='box'>
<div class='cell'>
<div class='pull-right'><a href="<?php echo site_url('admin/links');?>" class="btn">返回<?=$title?></a></div>
<a href="/" class="startbbs1">StartBBS</a> <span class="chevron">&nbsp;›&nbsp;</span> <a href="/admin">管理后台</a> <span class="chevron">&nbsp;›&nbsp;</span> <?=$title?>
</div>
<div class='cell'>
<form accept-charset="UTF-8" action="<?php echo site_url('admin/links/edit/'.$link['id']);?>" class="simple_form form-horizontal" id="edit_user_1" method="post" novalidate="novalidate">
<div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden" value="iM/k39XK4U+GmgVT7Ps8Ko3OhPrcTBqUSu4yKYPgAjk=" /></div>
<div class="control-group string required">
<label class="string required control-label" for="name">网站名</label>
<div class="controls">
<input class="string required" id="name" name="name" size="50" type="text" value="<?=$link['name']?>" /></div></div>
<div class="control-group email optional">
<label class="email optional control-label" for="url">网址</label>
<div class="controls">
<input class="string email optional" id="url" name="url" size="50" type="email" value="<?=$link['url']?>" /></div></div>
<div class="control-group string optional">
<label class="string optional control-label" for="user_account_attributes_location">显示/隐藏</label>
<div class="controls">
<label class='radio inline'>
<input<?php if($link['is_hidden'] =='0'){ ?> checked="checked"<?php } ?> id="settings_show_community_stats_on" name="is_hidden" type="radio" value="0" />
显示
</label>
<label class='radio inline'>
<input<?php if($link['is_hidden'] =='1'){ ?> checked="checked"<?php } ?> id="settings_show_community_stats_off" name="is_hidden" type="radio" value="1" />
隐藏
</label>
</div>
</div>

<div class='form-actions'>
<input class="btn btn-small btn-primary" name="commit" type="submit" value="更新链接" />
</div>
</form>
</div>
</div>

</div>
</div></div></div>
<?php $this->load->view ('footer');?>

</body></html>

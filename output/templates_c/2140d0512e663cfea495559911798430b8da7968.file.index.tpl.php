<?php /* Smarty version Smarty-3.1.13, created on 2017-02-14 15:58:38
         compiled from "/Users/zoucunde/cunde/fis-demo/fis3-demo/backend-resource-manage/use-smarty/output/template/page/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91299571258a2b8ae43f948-00533013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2140d0512e663cfea495559911798430b8da7968' => 
    array (
      0 => '/Users/zoucunde/cunde/fis-demo/fis3-demo/backend-resource-manage/use-smarty/output/template/page/index.tpl',
      1 => 1487059020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91299571258a2b8ae43f948-00533013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58a2b8ae46c578_35513015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a2b8ae46c578_35513015')) {function content_58a2b8ae46c578_35513015($_smarty_tpl) {?><!DOCTYPE html>
<?php if(!class_exists('FISResource', false)){require_once('/Users/zoucunde/cunde/fis-demo/fis3-demo/backend-resource-manage/use-smarty/output/plugin/FISResource.class.php');}FISResource::setFramework(FISResource::getUri("static/mod.js", $_smarty_tpl->smarty)); ?><html>
<head>
    <title>Smarty TEST</title>
    <!--[FIS_CSS_LINKS_HOOK]-->
    <!--[FIS_JS_SCRIPT_HOOK]-->
</head>
<body>
    <?php if(!class_exists('FISResource', false)){require_once('/Users/zoucunde/cunde/fis-demo/fis3-demo/backend-resource-manage/use-smarty/output/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("widget/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."widget/header.tpl".'"', E_USER_ERROR);}FISResource::load("widget/header.tpl", $_smarty_tpl->smarty);?>
    <?php if(!class_exists('FISResource', false)){require_once('/Users/zoucunde/cunde/fis-demo/fis3-demo/backend-resource-manage/use-smarty/output/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("widget/body.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."widget/body.tpl".'"', E_USER_ERROR);}FISResource::load("widget/body.tpl", $_smarty_tpl->smarty);?>
    <?php if(!class_exists('FISResource', false)){require_once('/Users/zoucunde/cunde/fis-demo/fis3-demo/backend-resource-manage/use-smarty/output/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("widget/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."widget/footer.tpl".'"', E_USER_ERROR);}FISResource::load("widget/footer.tpl", $_smarty_tpl->smarty);?>
</body>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>
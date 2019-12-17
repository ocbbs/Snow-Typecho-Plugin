<?php
/**
 * 简单的页面下雪插件
 * 
 * @package Snow
 * @author Galaxy
 * @version 1.0.0
 * @link https://blog.miuxc.com
 */
class Snow_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->footer = array('Snow_Plugin', 'footer');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
        // /** 分类名称 */
        // $name = new Typecho_Widget_Helper_Form_Element_Text('word', NULL, 'Hello World', _t('说点什么'));
        // $form->addInput($name);
    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 输出底部
     * 
     * @access public
     * @return void
     */
    public static function footer(){
        echo <<<EOF
        <!-- Snow Start -->
        <script src="https://www.miuxc.com/js/Snow.js"></script>
	    <script type='text/javascript'>
				snowFall.snow(document.body);
				document.body.className  = "darkBg";
	            snowFall.snow(document.body, "clear");
	            snowFall.snow(document.body, {image : "https://www.miuxc.com/images/flake.png",flakeCount : 200, minSize: 10, maxSize:32});
	    </script>
<!-- Snow End -->
EOF;
	}
}

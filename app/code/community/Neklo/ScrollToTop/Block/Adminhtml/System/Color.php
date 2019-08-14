<?php

class Neklo_ScrollToTop_Block_Adminhtml_System_Color extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $element->setScope(false);
        $element->setCanUseWebsiteValue(false);
        $element->setCanUseDefaultValue(false);
        return parent::render($element);
    }

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $colorList = $this->getLayout()->createBlock('neklo_scrolltotop_adminhtml/system_color_list', 'neklo_scrolltotop_color_list');
        $colorList->setTemplate('neklo/scrolltotop/system/color/list.phtml');
        $colorList->setContainerId($element->getContainer()->getHtmlId());
        return $colorList->toHtml();
    }

    protected function _prepareLayout()
    {
        /* @var $head Mage_Page_Block_Html_Head */
        $head = $this->getLayout()->getBlock('head');
        if ($head) {
            $head->addItem('skin_css', 'neklo/scrolltotop/css/styles.css');
            $head->addItem('skin_js', 'neklo/scrolltotop/js/script.js');
        }
        return parent::_prepareLayout();
    }
}
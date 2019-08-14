<?php

class Neklo_ScrollToTop_Block_Adminhtml_System_Color_List extends Mage_Adminhtml_Block_Template
{
    public function getColorList()
    {
        return Mage::getModel('neklo_scrolltotop/source_color')->getColorList();
    }

    public function getColorInputId()
    {
        return $this->getContainerId() . '_color';
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return string
     */
    public function getColor($store = null)
    {
        return $this->getConfig()->getColor($store);;
    }

    /**
     * @return string
     */
    public function getContainerId()
    {
        return parent::getContainerId();
    }

    /**
     * @return Neklo_ScrollToTop_Helper_Config
     */
    public function getConfig()
    {
        return Mage::helper('neklo_scrolltotop/config');
    }
}
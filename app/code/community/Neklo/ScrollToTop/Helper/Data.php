<?php

class Neklo_ScrollToTop_Helper_Data extends Mage_Core_Helper_Data
{
    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function isEnabled($store = null)
    {
        return $this->getConfig()->isEnabled($store);
    }

    /**
     * @return Neklo_ScrollToTop_Helper_Config
     */
    public function getConfig()
    {
        return Mage::helper('neklo_scrolltotop/config');
    }
}
<?php

class Neklo_ScrollToTop_Block_Arrow extends Mage_Core_Block_Template
{
    /**
     * @return bool
     */
    public function canShow()
    {
        if (!$this->getConfig()->isEnabled()) {
            return false;
        }
        if ($this->getConfig()->canDisplayOnAll()) {
            return true;
        }
        if ($this->getPageHelper()->isHomePage()) {
            return $this->getConfig()->canDisplayOnHome();
        }
        if ($this->getPageHelper()->isCmsPage()) {
            return $this->getConfig()->canDisplayOnCms();
        }
        if ($this->getPageHelper()->isCategoryPage()) {
            return $this->getConfig()->canDisplayOnCategory();
        }
        if ($this->getPageHelper()->isProductPage()) {
            return $this->getConfig()->canDisplayOnProduct();
        }
        if ($this->getPageHelper()->isCheckoutPage()) {
            return $this->getConfig()->canDisplayOnCheckout();
        }
        if ($this->getPageHelper()->isCartPage()) {
            return $this->getConfig()->canDisplayOnCart();
        }
        if ($this->getPageHelper()->isAccountPage()) {
            return $this->getConfig()->canDisplayOnAccount();
        }
        return $this->getConfig()->canDisplayOnOther();
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return string
     */
    public function getColor($store = null)
    {
        return $this->getConfig()->getColor($store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return string
     */
    public function getPosition($store = null)
    {
        return $this->getConfig()->getPosition($store);
    }

    /**
     * @return Neklo_ScrollToTop_Helper_Config
     */
    public function getConfig()
    {
        return Mage::helper('neklo_scrolltotop/config');
    }

    /**
     * @return Neklo_ScrollToTop_Helper_Page
     */
    public function getPageHelper()
    {
        return Mage::helper('neklo_scrolltotop/page');
    }
}
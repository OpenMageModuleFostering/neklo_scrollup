<?php

class Neklo_Core_Adminhtml_Neklo_Core_NewsletterController extends Mage_Adminhtml_Controller_Action
{
    const SUBSCRIBE_URL = '<subscribe_url></subscribe_url>';

    public function subscribeAction()
    {
        $result = array(
            'success' => true,
        );
        try {
            $data = $this->getRequest()->getPost();
            $this->_subscribe($data);
        } catch (Exception $e) {
            $result['success'] = false;
            $this->getResponse()->setBody(Zend_Json::encode($result));
            return;
        }
        $this->getResponse()->setBody(Zend_Json::encode($result));
    }

    protected function _subscribe($data)
    {
        $params = Mage::helper('core')->urlEncode(Mage::helper('core')->jsonEncode($data));
        if ($params) {
            $httpClient = new Varien_Http_Client();
            $httpClient
                ->setMethod(Zend_Http_Client::POST)
                ->setUri(self::SUBSCRIBE_URL)
                ->setConfig(
                    array(
                        'maxredirects' => 0,
                        'timeout'      => 30,
                    )
                )
                ->setRawData($params)
                ->request()
            ;
        }
    }

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('system/config/neklo_core');
    }
}
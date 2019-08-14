<?php

class Neklo_ScrollToTop_Model_Source_Position
{
    const LEFT_CODE  = 'left';
    const LEFT_LABEL = 'Left';

    const RIGHT_CODE  = 'right';
    const RIGHT_LABEL = 'Right';

    public function toOptionArray()
    {
        $helper = Mage::helper('neklo_scrolltotop');
        return array(
            array(
                'value' => self::LEFT_CODE,
                'label' => $helper->__(self::LEFT_LABEL),
            ),
            array(
                'value' => self::RIGHT_CODE,
                'label' => $helper->__(self::RIGHT_LABEL),
            ),
        );
    }

    public function toArray()
    {
        $helper = Mage::helper('neklo_scrolltotop');
        return array(
            self::LEFT_CODE  => $helper->__(self::LEFT_LABEL),
            self::RIGHT_CODE => $helper->__(self::RIGHT_LABEL),
        );
    }
}
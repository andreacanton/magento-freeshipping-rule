<?php

class Ac_Freeshipping_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function flatrateIgnoreFreeShipping()
    {
        return boolval(Mage::getStoreConfig('carriers/flatrate/ignore_freeshipping'));
    }

    public function log($message)
    {
        Mage::log($message, null, 'freeshipping.log');
    }
}

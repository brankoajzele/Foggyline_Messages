<?php
/**
 * @category    Foggyline
 * @package     Foggyline_Messages
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Branko Ajzele
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Foggyline_Messages_Helper_Data extends Mage_Core_Helper_Abstract
{
    const CONFIG_ACTIVE = 'design/messages/active';

    const CONFIG_MESSAGE_1 = 'design/messages/message1';
    const CONFIG_MESSAGE_2 = 'design/messages/message2';
    const CONFIG_MESSAGE_3 = 'design/messages/message3';
    const CONFIG_MESSAGE_4 = 'design/messages/message4';

    public function isModuleEnabled($moduleName = null)
    {
        if (Mage::getStoreConfig(self::CONFIG_ACTIVE) == '0') {
            return false;
        }

        return parent::isModuleEnabled($moduleName = null);
    }

    public function getMessage1($store = null)
    {
        return Mage::getStoreConfig(self::CONFIG_MESSAGE_1, $store);
    }

    public function getMessage2($store = null)
    {
        return Mage::getStoreConfig(self::CONFIG_MESSAGE_2, $store);
    }

    public function getMessage3($store = null)
    {
        return Mage::getStoreConfig(self::CONFIG_MESSAGE_3, $store);
    }

    public function getMessage4($store = null)
    {
        return Mage::getStoreConfig(self::CONFIG_MESSAGE_4, $store);
    }

    public function getMessageTypes($store = null)
    {
        $types = array (
            $this->getMessage1($store) => $this->getMessage1($store),
            $this->getMessage2($store) => $this->getMessage2($store),
            $this->getMessage3($store) => $this->getMessage3($store),
            $this->getMessage4($store) => $this->getMessage4($store),
        );

        if (count($types) == 4) {
            return $types;
        }

        return array();
    }
}

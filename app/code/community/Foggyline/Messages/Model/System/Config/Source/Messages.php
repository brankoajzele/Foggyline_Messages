<?php
/**
 * @category    Foggyline
 * @package     Foggyline_Messages
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Branko Ajzele
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Foggyline_Messages_Model_System_Config_Source_Messages
{
    public function toOptionArray()
    {
        $helper = Mage::helper('foggyline_messages');

        return array(
            array('value' => Mage_Core_Model_Message::ERROR, 'label' => $helper->__(Mage_Core_Model_Message::ERROR)),
            array('value' => Mage_Core_Model_Message::WARNING, 'label' => $helper->__(Mage_Core_Model_Message::WARNING)),
            array('value' => Mage_Core_Model_Message::NOTICE, 'label' => $helper->__(Mage_Core_Model_Message::NOTICE)),
            array('value' => Mage_Core_Model_Message::SUCCESS, 'label' => $helper->__(Mage_Core_Model_Message::SUCCESS)),
        );
    }
}

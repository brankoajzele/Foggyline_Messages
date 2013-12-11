Foggyline_Messages
==================

Default Magento installation has the following output sort order for its system messages: 
* ERROR (result of `Mage::getSingleton('core/session')->addError('Message here');`)
* WARNING (result of `Mage::getSingleton('core/session')->addWarning('Message here');`)
* NOTICE (result of `Mage::getSingleton('core/session')->addNotice('Message here');`)
* SUCCESS (result of `Mage::getSingleton('core/session')->addSuccess('Message here');`)
 
This sort order and entire HTML output are defined in `Mage_Core_Block_Messages` class within `getGroupedHtml()` method, so there is no theme *.phtml file you can edit to change the sort order. 

This extension enables you to change sort order through config, which is available under `System > Configuration > General > Design > Foggyline | Messages`.

Please keep in mind that cases where your store fires all four messages at once are extremely rare, if any, so you might not even notice the results of this config.

In case of a faulty config, default messages order will kick in.

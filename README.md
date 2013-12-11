Foggyline_Messages
==================

Default Magento installation has the following output sort order for its system messages: 
* ERROR
* WARNING
* NOTICE 
* SUCCESS 
 
This sort order and entire HTML output are defined in Mage_Core_Block_Messages class within getGroupedHtml() method, so there is no theme *.phtml file you can edit to change the sort order. 

This extension enables you to change sort order through config. 

In case of a faulty config, default messages order will kick in.

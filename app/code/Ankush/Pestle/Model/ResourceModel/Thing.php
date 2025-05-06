<?php
namespace Ankush\Pestle\Model\ResourceModel;

/**
 * Class Thing
 */
class Thing extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('ankush_pestle_thing', 'thing_id');
    }
}

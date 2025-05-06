<?php
namespace Ankush\Pestle\Model\ResourceModel\Thing;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Ankush\Pestle\Model\Thing::class, \Ankush\Pestle\Model\ResourceModel\Thing::class);
    }
}

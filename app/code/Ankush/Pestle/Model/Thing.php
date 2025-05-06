<?php
namespace Ankush\Pestle\Model;

/**
 * Class Thing
 */
class Thing extends \Magento\Framework\Model\AbstractModel implements
    \Ankush\Pestle\Api\Data\ThingInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'ankush_pestle_thing';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Ankush\Pestle\Model\ResourceModel\Thing::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}

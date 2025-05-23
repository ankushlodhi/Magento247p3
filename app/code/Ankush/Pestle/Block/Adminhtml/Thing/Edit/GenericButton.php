<?php
namespace Ankush\Pestle\Block\Adminhtml\Thing\Edit;


/**
 * Class GenericButton
 */
class GenericButton
{
    protected $context;

    //putting all the button methods in here.  No "right", but the whole
    //button/GenericButton thing seems -- not that great -- to begin with
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context
    ) {
        $this->context = $context;
    }

    public function getBackUrl()
    {
        return $this->getUrl('*/*/');
    }

    public function getDeleteUrl()
    {
        return $this->getUrl('*/*/delete', ['object_id' => $this->getObjectId()]);
    }

    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }

    public function getObjectId()
    {
        return $this->context->getRequest()->getParam('thing_id');
    }
}

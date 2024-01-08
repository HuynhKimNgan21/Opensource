<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\AddAttributeToTemplate;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\AddAttributeToTemplate
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\AddAttributeToTemplate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Controller\Adminhtml\Product\Builder $productBuilder, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, ?\Magento\Eav\Api\Data\AttributeGroupInterfaceFactory $attributeGroupFactory = null, ?\Magento\Eav\Api\AttributeRepositoryInterface $attributeRepository = null, ?\Magento\Catalog\Api\AttributeSetRepositoryInterface $attributeSetRepository = null, ?\Magento\Eav\Api\AttributeGroupRepositoryInterface $attributeGroupRepository = null, ?\Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder = null, ?\Magento\Eav\Api\AttributeManagementInterface $attributeManagement = null, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\Api\ExtensionAttributesFactory $extensionAttributesFactory = null, ?\Magento\Framework\App\CacheInterface $cache = null)
    {
        $this->___init();
        parent::__construct($context, $productBuilder, $resultJsonFactory, $attributeGroupFactory, $attributeRepository, $attributeSetRepository, $attributeGroupRepository, $searchCriteriaBuilder, $attributeManagement, $logger, $extensionAttributesFactory, $cache);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function _processUrlKeys()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_processUrlKeys');
        return $pluginInfo ? $this->___callPlugins('_processUrlKeys', func_get_args(), $pluginInfo) : parent::_processUrlKeys();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}

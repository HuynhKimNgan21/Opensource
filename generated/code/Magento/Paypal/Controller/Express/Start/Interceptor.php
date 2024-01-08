<?php
namespace Magento\Paypal\Controller\Express\Start;

/**
 * Interceptor class for @see \Magento\Paypal\Controller\Express\Start
 */
class Interceptor extends \Magento\Paypal\Controller\Express\Start implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Paypal\Model\Express\Checkout\Factory $checkoutFactory, \Magento\Framework\Session\Generic $paypalSession, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Customer\Model\Url $customerUrl, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $orderFactory, $checkoutFactory, $paypalSession, $urlHelper, $customerUrl, $logger);
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
    public function getCustomerBeforeAuthUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerBeforeAuthUrl');
        return $pluginInfo ? $this->___callPlugins('getCustomerBeforeAuthUrl', func_get_args(), $pluginInfo) : parent::getCustomerBeforeAuthUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlagList()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlagList');
        return $pluginInfo ? $this->___callPlugins('getActionFlagList', func_get_args(), $pluginInfo) : parent::getActionFlagList();
    }

    /**
     * {@inheritdoc}
     */
    public function getLoginUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLoginUrl');
        return $pluginInfo ? $this->___callPlugins('getLoginUrl', func_get_args(), $pluginInfo) : parent::getLoginUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectActionName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRedirectActionName');
        return $pluginInfo ? $this->___callPlugins('getRedirectActionName', func_get_args(), $pluginInfo) : parent::getRedirectActionName();
    }

    /**
     * {@inheritdoc}
     */
    public function redirectLogin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'redirectLogin');
        return $pluginInfo ? $this->___callPlugins('redirectLogin', func_get_args(), $pluginInfo) : parent::redirectLogin();
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

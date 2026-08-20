<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Storefront>
 */
final class StorefrontBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $checkoutUrlTemplate;

    /**

     * @var ?string
     */
    private $orderUrlTemplate;

    /**

     * @var ?string
     */
    private $termsOfServiceUrl;

    /**

     * @var ?string
     */
    private $privacyPolicyUrl;

    /**

     * @var ?string
     */
    private $refundPolicyUrl;

    /**

     * @var ?string
     */
    private $shippingPolicyUrl;

    /**

     * @var ?string
     */
    private $cookiePolicyUrl;

    /**

     * @var ?string
     */
    private $imprintUrl;

    /**

     * @var ?string
     */
    private $faqUrl;

    /**

     * @var ?string
     */
    private $contactUrl;

    /**
     * <p><a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template for the customer-facing checkout page.
     * Must contain the <code>checkoutId</code> variable, for example <code>https://example.com/checkout/{checkoutId}</code>.</p>
     *

     * @return null|string
     */
    public function getCheckoutUrlTemplate()
    {
        return $this->checkoutUrlTemplate;
    }

    /**
     * <p><a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template for the customer-facing order status page.
     * Must contain the <code>orderId</code> variable, for example <code>https://example.com/orders/{orderId}</code>.</p>
     *

     * @return null|string
     */
    public function getOrderUrlTemplate()
    {
        return $this->orderUrlTemplate;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's terms of service page.</p>
     *

     * @return null|string
     */
    public function getTermsOfServiceUrl()
    {
        return $this->termsOfServiceUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's privacy policy page.</p>
     *

     * @return null|string
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->privacyPolicyUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's refund policy page.</p>
     *

     * @return null|string
     */
    public function getRefundPolicyUrl()
    {
        return $this->refundPolicyUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's shipping policy page.</p>
     *

     * @return null|string
     */
    public function getShippingPolicyUrl()
    {
        return $this->shippingPolicyUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's cookie policy page.</p>
     *

     * @return null|string
     */
    public function getCookiePolicyUrl()
    {
        return $this->cookiePolicyUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's imprint (legal notice) page.</p>
     *

     * @return null|string
     */
    public function getImprintUrl()
    {
        return $this->imprintUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's FAQ page.</p>
     *

     * @return null|string
     */
    public function getFaqUrl()
    {
        return $this->faqUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's contact page.</p>
     *

     * @return null|string
     */
    public function getContactUrl()
    {
        return $this->contactUrl;
    }

    /**
     * @param ?string $checkoutUrlTemplate
     * @return $this
     */
    public function withCheckoutUrlTemplate(?string $checkoutUrlTemplate)
    {
        $this->checkoutUrlTemplate = $checkoutUrlTemplate;

        return $this;
    }

    /**
     * @param ?string $orderUrlTemplate
     * @return $this
     */
    public function withOrderUrlTemplate(?string $orderUrlTemplate)
    {
        $this->orderUrlTemplate = $orderUrlTemplate;

        return $this;
    }

    /**
     * @param ?string $termsOfServiceUrl
     * @return $this
     */
    public function withTermsOfServiceUrl(?string $termsOfServiceUrl)
    {
        $this->termsOfServiceUrl = $termsOfServiceUrl;

        return $this;
    }

    /**
     * @param ?string $privacyPolicyUrl
     * @return $this
     */
    public function withPrivacyPolicyUrl(?string $privacyPolicyUrl)
    {
        $this->privacyPolicyUrl = $privacyPolicyUrl;

        return $this;
    }

    /**
     * @param ?string $refundPolicyUrl
     * @return $this
     */
    public function withRefundPolicyUrl(?string $refundPolicyUrl)
    {
        $this->refundPolicyUrl = $refundPolicyUrl;

        return $this;
    }

    /**
     * @param ?string $shippingPolicyUrl
     * @return $this
     */
    public function withShippingPolicyUrl(?string $shippingPolicyUrl)
    {
        $this->shippingPolicyUrl = $shippingPolicyUrl;

        return $this;
    }

    /**
     * @param ?string $cookiePolicyUrl
     * @return $this
     */
    public function withCookiePolicyUrl(?string $cookiePolicyUrl)
    {
        $this->cookiePolicyUrl = $cookiePolicyUrl;

        return $this;
    }

    /**
     * @param ?string $imprintUrl
     * @return $this
     */
    public function withImprintUrl(?string $imprintUrl)
    {
        $this->imprintUrl = $imprintUrl;

        return $this;
    }

    /**
     * @param ?string $faqUrl
     * @return $this
     */
    public function withFaqUrl(?string $faqUrl)
    {
        $this->faqUrl = $faqUrl;

        return $this;
    }

    /**
     * @param ?string $contactUrl
     * @return $this
     */
    public function withContactUrl(?string $contactUrl)
    {
        $this->contactUrl = $contactUrl;

        return $this;
    }


    public function build(): Storefront
    {
        return new StorefrontModel(
            $this->checkoutUrlTemplate,
            $this->orderUrlTemplate,
            $this->termsOfServiceUrl,
            $this->privacyPolicyUrl,
            $this->refundPolicyUrl,
            $this->shippingPolicyUrl,
            $this->cookiePolicyUrl,
            $this->imprintUrl,
            $this->faqUrl,
            $this->contactUrl
        );
    }

    public static function of(): StorefrontBuilder
    {
        return new self();
    }
}

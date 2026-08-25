<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StorefrontModel extends JsonObjectModel implements Storefront
{
    /**
     *
     * @var ?string
     */
    protected $checkoutUrlTemplate;

    /**
     *
     * @var ?string
     */
    protected $orderUrlTemplate;

    /**
     *
     * @var ?string
     */
    protected $termsOfServiceUrl;

    /**
     *
     * @var ?string
     */
    protected $privacyPolicyUrl;

    /**
     *
     * @var ?string
     */
    protected $refundPolicyUrl;

    /**
     *
     * @var ?string
     */
    protected $shippingPolicyUrl;

    /**
     *
     * @var ?string
     */
    protected $cookiePolicyUrl;

    /**
     *
     * @var ?string
     */
    protected $imprintUrl;

    /**
     *
     * @var ?string
     */
    protected $faqUrl;

    /**
     *
     * @var ?string
     */
    protected $contactUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $checkoutUrlTemplate = null,
        ?string $orderUrlTemplate = null,
        ?string $termsOfServiceUrl = null,
        ?string $privacyPolicyUrl = null,
        ?string $refundPolicyUrl = null,
        ?string $shippingPolicyUrl = null,
        ?string $cookiePolicyUrl = null,
        ?string $imprintUrl = null,
        ?string $faqUrl = null,
        ?string $contactUrl = null
    ) {
        $this->checkoutUrlTemplate = $checkoutUrlTemplate;
        $this->orderUrlTemplate = $orderUrlTemplate;
        $this->termsOfServiceUrl = $termsOfServiceUrl;
        $this->privacyPolicyUrl = $privacyPolicyUrl;
        $this->refundPolicyUrl = $refundPolicyUrl;
        $this->shippingPolicyUrl = $shippingPolicyUrl;
        $this->cookiePolicyUrl = $cookiePolicyUrl;
        $this->imprintUrl = $imprintUrl;
        $this->faqUrl = $faqUrl;
        $this->contactUrl = $contactUrl;
    }

    /**
     * <p><a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template for the customer-facing checkout page.
     * Must contain the <code>checkoutId</code> variable, for example <code>https://example.com/checkout/{checkoutId}</code>.</p>
     *
     *
     * @return null|string
     */
    public function getCheckoutUrlTemplate()
    {
        if (is_null($this->checkoutUrlTemplate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHECKOUT_URL_TEMPLATE);
            if (is_null($data)) {
                return null;
            }
            $this->checkoutUrlTemplate = (string) $data;
        }

        return $this->checkoutUrlTemplate;
    }

    /**
     * <p><a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template for the customer-facing order status page.
     * Must contain the <code>orderId</code> variable, for example <code>https://example.com/orders/{orderId}</code>.</p>
     *
     *
     * @return null|string
     */
    public function getOrderUrlTemplate()
    {
        if (is_null($this->orderUrlTemplate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_URL_TEMPLATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderUrlTemplate = (string) $data;
        }

        return $this->orderUrlTemplate;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's terms of service page.</p>
     *
     *
     * @return null|string
     */
    public function getTermsOfServiceUrl()
    {
        if (is_null($this->termsOfServiceUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TERMS_OF_SERVICE_URL);
            if (is_null($data)) {
                return null;
            }
            $this->termsOfServiceUrl = (string) $data;
        }

        return $this->termsOfServiceUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's privacy policy page.</p>
     *
     *
     * @return null|string
     */
    public function getPrivacyPolicyUrl()
    {
        if (is_null($this->privacyPolicyUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRIVACY_POLICY_URL);
            if (is_null($data)) {
                return null;
            }
            $this->privacyPolicyUrl = (string) $data;
        }

        return $this->privacyPolicyUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's refund policy page.</p>
     *
     *
     * @return null|string
     */
    public function getRefundPolicyUrl()
    {
        if (is_null($this->refundPolicyUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REFUND_POLICY_URL);
            if (is_null($data)) {
                return null;
            }
            $this->refundPolicyUrl = (string) $data;
        }

        return $this->refundPolicyUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's shipping policy page.</p>
     *
     *
     * @return null|string
     */
    public function getShippingPolicyUrl()
    {
        if (is_null($this->shippingPolicyUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_POLICY_URL);
            if (is_null($data)) {
                return null;
            }
            $this->shippingPolicyUrl = (string) $data;
        }

        return $this->shippingPolicyUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's cookie policy page.</p>
     *
     *
     * @return null|string
     */
    public function getCookiePolicyUrl()
    {
        if (is_null($this->cookiePolicyUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COOKIE_POLICY_URL);
            if (is_null($data)) {
                return null;
            }
            $this->cookiePolicyUrl = (string) $data;
        }

        return $this->cookiePolicyUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's imprint (legal notice) page.</p>
     *
     *
     * @return null|string
     */
    public function getImprintUrl()
    {
        if (is_null($this->imprintUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_IMPRINT_URL);
            if (is_null($data)) {
                return null;
            }
            $this->imprintUrl = (string) $data;
        }

        return $this->imprintUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's FAQ page.</p>
     *
     *
     * @return null|string
     */
    public function getFaqUrl()
    {
        if (is_null($this->faqUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FAQ_URL);
            if (is_null($data)) {
                return null;
            }
            $this->faqUrl = (string) $data;
        }

        return $this->faqUrl;
    }

    /**
     * <p>Absolute <code>https</code> URL of the storefront's contact page.</p>
     *
     *
     * @return null|string
     */
    public function getContactUrl()
    {
        if (is_null($this->contactUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONTACT_URL);
            if (is_null($data)) {
                return null;
            }
            $this->contactUrl = (string) $data;
        }

        return $this->contactUrl;
    }


    /**
     * @param ?string $checkoutUrlTemplate
     */
    public function setCheckoutUrlTemplate(?string $checkoutUrlTemplate): void
    {
        $this->checkoutUrlTemplate = $checkoutUrlTemplate;
    }

    /**
     * @param ?string $orderUrlTemplate
     */
    public function setOrderUrlTemplate(?string $orderUrlTemplate): void
    {
        $this->orderUrlTemplate = $orderUrlTemplate;
    }

    /**
     * @param ?string $termsOfServiceUrl
     */
    public function setTermsOfServiceUrl(?string $termsOfServiceUrl): void
    {
        $this->termsOfServiceUrl = $termsOfServiceUrl;
    }

    /**
     * @param ?string $privacyPolicyUrl
     */
    public function setPrivacyPolicyUrl(?string $privacyPolicyUrl): void
    {
        $this->privacyPolicyUrl = $privacyPolicyUrl;
    }

    /**
     * @param ?string $refundPolicyUrl
     */
    public function setRefundPolicyUrl(?string $refundPolicyUrl): void
    {
        $this->refundPolicyUrl = $refundPolicyUrl;
    }

    /**
     * @param ?string $shippingPolicyUrl
     */
    public function setShippingPolicyUrl(?string $shippingPolicyUrl): void
    {
        $this->shippingPolicyUrl = $shippingPolicyUrl;
    }

    /**
     * @param ?string $cookiePolicyUrl
     */
    public function setCookiePolicyUrl(?string $cookiePolicyUrl): void
    {
        $this->cookiePolicyUrl = $cookiePolicyUrl;
    }

    /**
     * @param ?string $imprintUrl
     */
    public function setImprintUrl(?string $imprintUrl): void
    {
        $this->imprintUrl = $imprintUrl;
    }

    /**
     * @param ?string $faqUrl
     */
    public function setFaqUrl(?string $faqUrl): void
    {
        $this->faqUrl = $faqUrl;
    }

    /**
     * @param ?string $contactUrl
     */
    public function setContactUrl(?string $contactUrl): void
    {
        $this->contactUrl = $contactUrl;
    }
}

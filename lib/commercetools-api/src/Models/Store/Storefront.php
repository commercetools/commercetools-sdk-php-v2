<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Storefront extends JsonObject
{
    public const FIELD_CHECKOUT_URL_TEMPLATE = 'checkoutUrlTemplate';
    public const FIELD_ORDER_URL_TEMPLATE = 'orderUrlTemplate';
    public const FIELD_TERMS_OF_SERVICE_URL = 'termsOfServiceUrl';
    public const FIELD_PRIVACY_POLICY_URL = 'privacyPolicyUrl';
    public const FIELD_REFUND_POLICY_URL = 'refundPolicyUrl';
    public const FIELD_SHIPPING_POLICY_URL = 'shippingPolicyUrl';
    public const FIELD_COOKIE_POLICY_URL = 'cookiePolicyUrl';
    public const FIELD_IMPRINT_URL = 'imprintUrl';
    public const FIELD_FAQ_URL = 'faqUrl';
    public const FIELD_CONTACT_URL = 'contactUrl';

    /**
     * <p><a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template for the customer-facing checkout page.
     * Must contain the <code>checkoutId</code> variable, for example <code>https://example.com/checkout/{checkoutId}</code>.</p>
     *

     * @return null|string
     */
    public function getCheckoutUrlTemplate();

    /**
     * <p><a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template for the customer-facing order status page.
     * Must contain the <code>orderId</code> variable, for example <code>https://example.com/orders/{orderId}</code>.</p>
     *

     * @return null|string
     */
    public function getOrderUrlTemplate();

    /**
     * <p>Absolute <code>https</code> URL of the storefront's terms of service page.</p>
     *

     * @return null|string
     */
    public function getTermsOfServiceUrl();

    /**
     * <p>Absolute <code>https</code> URL of the storefront's privacy policy page.</p>
     *

     * @return null|string
     */
    public function getPrivacyPolicyUrl();

    /**
     * <p>Absolute <code>https</code> URL of the storefront's refund policy page.</p>
     *

     * @return null|string
     */
    public function getRefundPolicyUrl();

    /**
     * <p>Absolute <code>https</code> URL of the storefront's shipping policy page.</p>
     *

     * @return null|string
     */
    public function getShippingPolicyUrl();

    /**
     * <p>Absolute <code>https</code> URL of the storefront's cookie policy page.</p>
     *

     * @return null|string
     */
    public function getCookiePolicyUrl();

    /**
     * <p>Absolute <code>https</code> URL of the storefront's imprint (legal notice) page.</p>
     *

     * @return null|string
     */
    public function getImprintUrl();

    /**
     * <p>Absolute <code>https</code> URL of the storefront's FAQ page.</p>
     *

     * @return null|string
     */
    public function getFaqUrl();

    /**
     * <p>Absolute <code>https</code> URL of the storefront's contact page.</p>
     *

     * @return null|string
     */
    public function getContactUrl();

    /**
     * @param ?string $checkoutUrlTemplate
     */
    public function setCheckoutUrlTemplate(?string $checkoutUrlTemplate): void;

    /**
     * @param ?string $orderUrlTemplate
     */
    public function setOrderUrlTemplate(?string $orderUrlTemplate): void;

    /**
     * @param ?string $termsOfServiceUrl
     */
    public function setTermsOfServiceUrl(?string $termsOfServiceUrl): void;

    /**
     * @param ?string $privacyPolicyUrl
     */
    public function setPrivacyPolicyUrl(?string $privacyPolicyUrl): void;

    /**
     * @param ?string $refundPolicyUrl
     */
    public function setRefundPolicyUrl(?string $refundPolicyUrl): void;

    /**
     * @param ?string $shippingPolicyUrl
     */
    public function setShippingPolicyUrl(?string $shippingPolicyUrl): void;

    /**
     * @param ?string $cookiePolicyUrl
     */
    public function setCookiePolicyUrl(?string $cookiePolicyUrl): void;

    /**
     * @param ?string $imprintUrl
     */
    public function setImprintUrl(?string $imprintUrl): void;

    /**
     * @param ?string $faqUrl
     */
    public function setFaqUrl(?string $faqUrl): void;

    /**
     * @param ?string $contactUrl
     */
    public function setContactUrl(?string $contactUrl): void;
}

<?php
declare(strict_types=1);

namespace Commercetools\Raml;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;

class Resource
{
    const TEMPLATE_REGEXP = '/\{([^\{\}]+)\}/';

    /**
     * @param  string  $string
     * @param  mixed $interpolate
     * @param  mixed $defaults
     * @return string
     */
    final protected function template(string $string, array $interpolate = [], array $defaults = []): string {
        return (string)preg_replace_callback(static::TEMPLATE_REGEXP, function ($matches) use ($defaults, $interpolate) {
            $key = $matches[1];
            if (isset($interpolate[$key]) && $interpolate[$key] != null) {
                return urlencode((string)$interpolate[$key]);
            }

            if (isset($defaults[$key]) && $defaults[$key] != null) {
                return urlencode((string)$defaults[$key]);
            }

            return '';
        }, $string);
    }

    private $uri;

    public function __construct(string  $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    final protected function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param $method
     * @param $uri
     * @param mixed $body
     * @param array $options
     * @return RequestInterface
     */
    final protected function buildRequest(string  $method, string  $uri, $body = null, array $options = [], $requestClass = Request::class): RequestInterface
    {
        $headers = isset($options['headers']) ? $options['headers'] : [];
        /**
         * @var RequestInterface $request
         */
        $request = new $requestClass($method, $uri, $headers, $body);

        if (isset($options['query'])) {
            ksort($options['query']);
            $uri = $request->getUri()->withQuery(Psr7\build_query($options['query']));
            $request = $request->withUri($uri);
        }
        

        return $request;
    }
}

class RequestBuilder extends Resource
{
    public function __construct($options = [])
    {
        $baseUriParameters = [];
        if (isset($options['baseUriParameters'])) {
            $baseUriParameters = $options['baseUriParameters'];
        }
        if (isset($options['baseUri'])) {
            $baseUri = $this->template($options['baseUri'], $baseUriParameters);
        } else {
            $baseUri = $this->template('https://api.sphere.io', []);
        }
        parent::__construct(trim($baseUri, '/'));
    }
    
    /**
     * @return RequestInterface
     */
    final public function buildCustom(string  $method, string  $uri, $body = null, array $options = []): RequestInterface
    {
        if (isset($options['uriParameters'])) {
            $uri = $this->template($this->getUri() . $uri, $options['uriParameters']);
            unset($options['uriParams']);
        } else {
            $uri = $this->getUri() . $uri;
        }
        return $this->buildRequest($method, $uri, $body, $options);
    }


    /**
     * @return Resource1
     */
    public function withProjectKey ($projectKey): Resource1 {
      
        $uri = $this->template($this->getUri() . '/{projectKey}', ['projectKey' => $projectKey]);
        return new Resource1($uri);
    }

}
final class Resource1 extends Resource {

    /**
     * @return Resource2
     */
    public function categories(): Resource2 {
        return new Resource2($this->getUri() . '/categories');
    }

    /**
     * @return Resource4
     */
    public function carts(): Resource4 {
        return new Resource4($this->getUri() . '/carts');
    }

    /**
     * @return Resource6
     */
    public function cartDiscounts(): Resource6 {
        return new Resource6($this->getUri() . '/cart-discounts');
    }

    /**
     * @return Resource8
     */
    public function channels(): Resource8 {
        return new Resource8($this->getUri() . '/channels');
    }

    /**
     * @return Resource10
     */
    public function customers(): Resource10 {
        return new Resource10($this->getUri() . '/customers');
    }

    /**
     * @return Resource18
     */
    public function customerGroups(): Resource18 {
        return new Resource18($this->getUri() . '/customer-groups');
    }

    /**
     * @return Resource20
     */
    public function customObjects(): Resource20 {
        return new Resource20($this->getUri() . '/custom-objects');
    }

    /**
     * @return Resource24
     */
    public function discountCodes(): Resource24 {
        return new Resource24($this->getUri() . '/discount-codes');
    }

    /**
     * @return Resource26
     */
    public function graphql(): Resource26 {
        return new Resource26($this->getUri() . '/graphql');
    }

    /**
     * @return Resource27
     */
    public function inventory(): Resource27 {
        return new Resource27($this->getUri() . '/inventory');
    }

    /**
     * @return Resource29
     */
    public function login(): Resource29 {
        return new Resource29($this->getUri() . '/login');
    }

    /**
     * @return Resource30
     */
    public function messages(): Resource30 {
        return new Resource30($this->getUri() . '/messages');
    }

    /**
     * @return Resource32
     */
    public function orders(): Resource32 {
        return new Resource32($this->getUri() . '/orders');
    }

    /**
     * @return Resource35
     */
    public function payments(): Resource35 {
        return new Resource35($this->getUri() . '/payments');
    }

    /**
     * @return Resource37
     */
    public function products(): Resource37 {
        return new Resource37($this->getUri() . '/products');
    }

    /**
     * @return Resource41
     */
    public function productDiscounts(): Resource41 {
        return new Resource41($this->getUri() . '/product-discounts');
    }

    /**
     * @return Resource43
     */
    public function productProjections(): Resource43 {
        return new Resource43($this->getUri() . '/product-projections');
    }

    /**
     * @return Resource48
     */
    public function productTypes(): Resource48 {
        return new Resource48($this->getUri() . '/product-types');
    }

    /**
     * @return Resource51
     */
    public function reviews(): Resource51 {
        return new Resource51($this->getUri() . '/reviews');
    }

    /**
     * @return Resource54
     */
    public function shippingMethods(): Resource54 {
        return new Resource54($this->getUri() . '/shipping-methods');
    }

    /**
     * @return Resource56
     */
    public function states(): Resource56 {
        return new Resource56($this->getUri() . '/states');
    }

    /**
     * @return Resource58
     */
    public function subscriptions(): Resource58 {
        return new Resource58($this->getUri() . '/subscriptions');
    }

    /**
     * @return Resource61
     */
    public function taxCategories(): Resource61 {
        return new Resource61($this->getUri() . '/tax-categories');
    }

    /**
     * @return Resource63
     */
    public function types(): Resource63 {
        return new Resource63($this->getUri() . '/types');
    }

    /**
     * @return Resource66
     */
    public function zones(): Resource66 {
        return new Resource66($this->getUri() . '/zones');
    }

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }
}
final class Resource2 extends Resource {

    /**
     * @return Resource2GetRequest
     */
    public function get ($query = null, array $options = []): Resource2GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource2GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource3
     */
    public function withId ($ID): Resource3 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource3($uri);
    }
}
final class Resource2GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource2GetRequest
     */
    public function withWhere($where): Resource2GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource2GetRequest
     */
    public function withSort($sort): Resource2GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource2GetRequest
     */
    public function withLimit($limit): Resource2GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource2GetRequest
     */
    public function withOffset($offset): Resource2GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource3 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource3DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource3DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource3DeleteRequest::class);
    }
}
final class Resource3DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource3DeleteRequest
     */
    public function withVersion($version): Resource3DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource4 extends Resource {

    /**
     * @return Resource4GetRequest
     */
    public function get ($query = null, array $options = []): Resource4GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource4GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource5
     */
    public function withId ($ID): Resource5 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource5($uri);
    }
}
final class Resource4GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource4GetRequest
     */
    public function withWhere($where): Resource4GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource4GetRequest
     */
    public function withSort($sort): Resource4GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource4GetRequest
     */
    public function withLimit($limit): Resource4GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource4GetRequest
     */
    public function withOffset($offset): Resource4GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource5 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource5DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource5DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource5DeleteRequest::class);
    }
}
final class Resource5DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource5DeleteRequest
     */
    public function withVersion($version): Resource5DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource6 extends Resource {

    /**
     * @return Resource6GetRequest
     */
    public function get ($query = null, array $options = []): Resource6GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource6GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource7
     */
    public function withId ($ID): Resource7 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource7($uri);
    }
}
final class Resource6GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource6GetRequest
     */
    public function withWhere($where): Resource6GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource6GetRequest
     */
    public function withSort($sort): Resource6GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource6GetRequest
     */
    public function withLimit($limit): Resource6GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource6GetRequest
     */
    public function withOffset($offset): Resource6GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource7 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource7DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource7DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource7DeleteRequest::class);
    }
}
final class Resource7DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource7DeleteRequest
     */
    public function withVersion($version): Resource7DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource8 extends Resource {

    /**
     * @return Resource8GetRequest
     */
    public function get ($query = null, array $options = []): Resource8GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource8GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource9
     */
    public function withId ($ID): Resource9 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource9($uri);
    }
}
final class Resource8GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource8GetRequest
     */
    public function withWhere($where): Resource8GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource8GetRequest
     */
    public function withSort($sort): Resource8GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource8GetRequest
     */
    public function withLimit($limit): Resource8GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource8GetRequest
     */
    public function withOffset($offset): Resource8GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource9 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource9DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource9DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource9DeleteRequest::class);
    }
}
final class Resource9DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource9DeleteRequest
     */
    public function withVersion($version): Resource9DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource10 extends Resource {

    /**
     * @return Resource12
     */
    public function emailToken(): Resource12 {
        return new Resource12($this->getUri() . '/email-token');
    }

    /**
     * @return Resource13
     */
    public function email(): Resource13 {
        return new Resource13($this->getUri() . '/email');
    }

    /**
     * @return Resource15
     */
    public function password(): Resource15 {
        return new Resource15($this->getUri() . '/password');
    }

    /**
     * @return Resource16
     */
    public function passwordToken(): Resource16 {
        return new Resource16($this->getUri() . '/password-token');
    }

    /**
     * @return Resource10GetRequest
     */
    public function get ($query = null, array $options = []): Resource10GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource10GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource11
     */
    public function withId ($ID): Resource11 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource11($uri);
    }
}
final class Resource10GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource10GetRequest
     */
    public function withWhere($where): Resource10GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource10GetRequest
     */
    public function withSort($sort): Resource10GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource10GetRequest
     */
    public function withLimit($limit): Resource10GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource10GetRequest
     */
    public function withOffset($offset): Resource10GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource11 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource11DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource11DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource11DeleteRequest::class);
    }
}
final class Resource11DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource11DeleteRequest
     */
    public function withVersion($version): Resource11DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource12 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource13 extends Resource {

    /**
     * @return Resource14
     */
    public function confirm(): Resource14 {
        return new Resource14($this->getUri() . '/confirm');
    }
}
final class Resource14 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource15 extends Resource {

    /**
     * @return Resource17
     */
    public function reset(): Resource17 {
        return new Resource17($this->getUri() . '/reset');
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource17 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource16 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource18 extends Resource {

    /**
     * @return Resource18GetRequest
     */
    public function get ($query = null, array $options = []): Resource18GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource18GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource19
     */
    public function withId ($ID): Resource19 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource19($uri);
    }
}
final class Resource18GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource18GetRequest
     */
    public function withWhere($where): Resource18GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource18GetRequest
     */
    public function withSort($sort): Resource18GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource18GetRequest
     */
    public function withLimit($limit): Resource18GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource18GetRequest
     */
    public function withOffset($offset): Resource18GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource19 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource19DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource19DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource19DeleteRequest::class);
    }
}
final class Resource19DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource19DeleteRequest
     */
    public function withVersion($version): Resource19DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource20 extends Resource {

    /**
     * @return Resource20GetRequest
     */
    public function get ($query = null, array $options = []): Resource20GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource20GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource21
     */
    public function withContainer ($container): Resource21 {
      
        $uri = $this->template($this->getUri() . '/{container}', ['container' => $container]);
        return new Resource21($uri);
    }

    /**
     * @return Resource23
     */
    public function withId ($ID): Resource23 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource23($uri);
    }
}
final class Resource20GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource20GetRequest
     */
    public function withWhere($where): Resource20GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource20GetRequest
     */
    public function withSort($sort): Resource20GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource20GetRequest
     */
    public function withLimit($limit): Resource20GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource20GetRequest
     */
    public function withOffset($offset): Resource20GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource21 extends Resource {

    /**
     * @return Resource22
     */
    public function withKey ($key): Resource22 {
      
        $uri = $this->template($this->getUri() . '/{key}', ['key' => $key]);
        return new Resource22($uri);
    }
}
final class Resource22 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return Resource22DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource22DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource22DeleteRequest::class);
    }
}
final class Resource22DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource22DeleteRequest
     */
    public function withVersion($version): Resource22DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource23 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return Resource23DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource23DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource23DeleteRequest::class);
    }
}
final class Resource23DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource23DeleteRequest
     */
    public function withVersion($version): Resource23DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource24 extends Resource {

    /**
     * @return Resource24GetRequest
     */
    public function get ($query = null, array $options = []): Resource24GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource24GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource25
     */
    public function withId ($ID): Resource25 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource25($uri);
    }
}
final class Resource24GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource24GetRequest
     */
    public function withWhere($where): Resource24GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource24GetRequest
     */
    public function withSort($sort): Resource24GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource24GetRequest
     */
    public function withLimit($limit): Resource24GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource24GetRequest
     */
    public function withOffset($offset): Resource24GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource25 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource25DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource25DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource25DeleteRequest::class);
    }
}
final class Resource25DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource25DeleteRequest
     */
    public function withVersion($version): Resource25DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource26 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource27 extends Resource {

    /**
     * @return Resource27GetRequest
     */
    public function get ($query = null, array $options = []): Resource27GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource27GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource28
     */
    public function withId ($ID): Resource28 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource28($uri);
    }
}
final class Resource27GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource27GetRequest
     */
    public function withWhere($where): Resource27GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource27GetRequest
     */
    public function withSort($sort): Resource27GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource27GetRequest
     */
    public function withLimit($limit): Resource27GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource27GetRequest
     */
    public function withOffset($offset): Resource27GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource28 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource28DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource28DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource28DeleteRequest::class);
    }
}
final class Resource28DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource28DeleteRequest
     */
    public function withVersion($version): Resource28DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource29 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource30 extends Resource {

    /**
     * @return Resource30GetRequest
     */
    public function get ($query = null, array $options = []): Resource30GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource30GetRequest::class);
    }

    /**
     * @return Resource31
     */
    public function withId ($ID): Resource31 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource31($uri);
    }
}
final class Resource30GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource30GetRequest
     */
    public function withWhere($where): Resource30GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource30GetRequest
     */
    public function withSort($sort): Resource30GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource30GetRequest
     */
    public function withLimit($limit): Resource30GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource30GetRequest
     */
    public function withOffset($offset): Resource30GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource31 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }
}
final class Resource32 extends Resource {

    /**
     * @return Resource34
     */
    public function import(): Resource34 {
        return new Resource34($this->getUri() . '/import');
    }

    /**
     * @return Resource32GetRequest
     */
    public function get ($query = null, array $options = []): Resource32GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource32GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource33
     */
    public function withId ($ID): Resource33 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource33($uri);
    }
}
final class Resource32GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource32GetRequest
     */
    public function withWhere($where): Resource32GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource32GetRequest
     */
    public function withSort($sort): Resource32GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource32GetRequest
     */
    public function withLimit($limit): Resource32GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource32GetRequest
     */
    public function withOffset($offset): Resource32GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource33 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource33DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource33DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource33DeleteRequest::class);
    }
}
final class Resource33DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource33DeleteRequest
     */
    public function withVersion($version): Resource33DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource34 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource35 extends Resource {

    /**
     * @return Resource35GetRequest
     */
    public function get ($query = null, array $options = []): Resource35GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource35GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource36
     */
    public function withId ($ID): Resource36 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource36($uri);
    }
}
final class Resource35GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource35GetRequest
     */
    public function withWhere($where): Resource35GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource35GetRequest
     */
    public function withSort($sort): Resource35GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource35GetRequest
     */
    public function withLimit($limit): Resource35GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource35GetRequest
     */
    public function withOffset($offset): Resource35GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource36 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource36DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource36DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource36DeleteRequest::class);
    }
}
final class Resource36DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource36DeleteRequest
     */
    public function withVersion($version): Resource36DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource37 extends Resource {

    /**
     * @return Resource37GetRequest
     */
    public function get ($query = null, array $options = []): Resource37GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource37GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource38
     */
    public function withKey ($key): Resource38 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource38($uri);
    }

    /**
     * @return Resource39
     */
    public function withId ($ID): Resource39 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource39($uri);
    }
}
final class Resource37GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource37GetRequest
     */
    public function withWhere($where): Resource37GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource37GetRequest
     */
    public function withSort($sort): Resource37GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource37GetRequest
     */
    public function withLimit($limit): Resource37GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource37GetRequest
     */
    public function withOffset($offset): Resource37GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource38 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource38DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource38DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource38DeleteRequest::class);
    }
}
final class Resource38DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource38DeleteRequest
     */
    public function withVersion($version): Resource38DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource39 extends Resource {

    /**
     * @return Resource40
     */
    public function images(): Resource40 {
        return new Resource40($this->getUri() . '/images');
    }

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource39DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource39DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource39DeleteRequest::class);
    }
}
final class Resource39DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource39DeleteRequest
     */
    public function withVersion($version): Resource39DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource40 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }
}
final class Resource41 extends Resource {

    /**
     * @return Resource41GetRequest
     */
    public function get ($query = null, array $options = []): Resource41GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource41GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource42
     */
    public function withId ($ID): Resource42 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource42($uri);
    }
}
final class Resource41GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource41GetRequest
     */
    public function withWhere($where): Resource41GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource41GetRequest
     */
    public function withSort($sort): Resource41GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource41GetRequest
     */
    public function withLimit($limit): Resource41GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource41GetRequest
     */
    public function withOffset($offset): Resource41GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource42 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource42DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource42DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource42DeleteRequest::class);
    }
}
final class Resource42DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource42DeleteRequest
     */
    public function withVersion($version): Resource42DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource43 extends Resource {

    /**
     * @return Resource46
     */
    public function search(): Resource46 {
        return new Resource46($this->getUri() . '/search');
    }

    /**
     * @return Resource47
     */
    public function suggest(): Resource47 {
        return new Resource47($this->getUri() . '/suggest');
    }

    /**
     * @return Resource43GetRequest
     */
    public function get ($query = null, array $options = []): Resource43GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource43GetRequest::class);
    }

    /**
     * @return Resource44
     */
    public function withKey ($key): Resource44 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource44($uri);
    }

    /**
     * @return Resource45
     */
    public function withId ($ID): Resource45 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource45($uri);
    }
}
final class Resource43GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource43GetRequest
     */
    public function withStaged($staged): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource43GetRequest
     */
    public function withWhere($where): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource43GetRequest
     */
    public function withSort($sort): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource43GetRequest
     */
    public function withLimit($limit): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource43GetRequest
     */
    public function withOffset($offset): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource44 extends Resource {

    /**
     * @return Resource44GetRequest
     */
    public function get ($query = null, array $options = []): Resource44GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource44GetRequest::class);
    }
}
final class Resource44GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource44GetRequest
     */
    public function withStaged($staged): Resource44GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource45 extends Resource {

    /**
     * @return Resource45GetRequest
     */
    public function get ($query = null, array $options = []): Resource45GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource45GetRequest::class);
    }
}
final class Resource45GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource45GetRequest
     */
    public function withStaged($staged): Resource45GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource46 extends Resource {

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource46GetRequest
     */
    public function get ($query = null, array $options = []): Resource46GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource46GetRequest::class);
    }
}
final class Resource46GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource46GetRequest
     */
    public function withFuzzy($fuzzy): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'fuzzy';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $fuzzy;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withFuzzyLevel($fuzzyLevel): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'fuzzyLevel';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $fuzzyLevel;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withStaged($staged): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withFilter($filter): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'filter';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $filter;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withFilterFacets($filterFacets): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'filter.facets';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $filterFacets;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withFilterQuery($filterQuery): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'filter.query';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $filterQuery;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withFacet($facet): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'facet';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $facet;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withPriceCurrency($priceCurrency): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'priceCurrency';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $priceCurrency;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withPriceCountry($priceCountry): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'priceCountry';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $priceCountry;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withPriceCustomerGroup($priceCustomerGroup): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'priceCustomerGroup';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $priceCustomerGroup;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withPriceChannel($priceChannel): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'priceChannel';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $priceChannel;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withTextLocale($locale, $textLocale): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = preg_replace(['/<<locale>>/'], [$locale], 'text.<<locale>>');
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $textLocale;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withSort($sort): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withLimit($limit): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource46GetRequest
     */
    public function withOffset($offset): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource47 extends Resource {

    /**
     * @return Resource47GetRequest
     */
    public function get ($query = null, array $options = []): Resource47GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource47GetRequest::class);
    }
}
final class Resource47GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource47GetRequest
     */
    public function withFuzzy($fuzzy): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'fuzzy';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $fuzzy;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource47GetRequest
     */
    public function withStaged($staged): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource47GetRequest
     */
    public function withSearchKeywordsLocale($locale, $searchKeywordsLocale): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = preg_replace(['/<<locale>>/'], [$locale], 'searchKeywords.<<locale>>');
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $searchKeywordsLocale;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource47GetRequest
     */
    public function withSort($sort): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource47GetRequest
     */
    public function withLimit($limit): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource47GetRequest
     */
    public function withOffset($offset): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource48 extends Resource {

    /**
     * @return Resource48GetRequest
     */
    public function get ($query = null, array $options = []): Resource48GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource48GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource49
     */
    public function withKey ($key): Resource49 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource49($uri);
    }

    /**
     * @return Resource50
     */
    public function withId ($ID): Resource50 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource50($uri);
    }
}
final class Resource48GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource48GetRequest
     */
    public function withWhere($where): Resource48GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource48GetRequest
     */
    public function withSort($sort): Resource48GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource48GetRequest
     */
    public function withLimit($limit): Resource48GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource48GetRequest
     */
    public function withOffset($offset): Resource48GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource49 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource49DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource49DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource49DeleteRequest::class);
    }
}
final class Resource49DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource49DeleteRequest
     */
    public function withVersion($version): Resource49DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource50 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource50DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource50DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource50DeleteRequest::class);
    }
}
final class Resource50DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource50DeleteRequest
     */
    public function withVersion($version): Resource50DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource51 extends Resource {

    /**
     * @return Resource51GetRequest
     */
    public function get ($query = null, array $options = []): Resource51GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource51GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource52
     */
    public function withKey ($key): Resource52 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource52($uri);
    }

    /**
     * @return Resource53
     */
    public function withId ($ID): Resource53 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource53($uri);
    }
}
final class Resource51GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource51GetRequest
     */
    public function withWhere($where): Resource51GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource51GetRequest
     */
    public function withSort($sort): Resource51GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource51GetRequest
     */
    public function withLimit($limit): Resource51GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource51GetRequest
     */
    public function withOffset($offset): Resource51GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource52 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource52DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource52DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource52DeleteRequest::class);
    }
}
final class Resource52DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource52DeleteRequest
     */
    public function withVersion($version): Resource52DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource53 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource53DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource53DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource53DeleteRequest::class);
    }
}
final class Resource53DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource53DeleteRequest
     */
    public function withVersion($version): Resource53DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource54 extends Resource {

    /**
     * @return Resource54GetRequest
     */
    public function get ($query = null, array $options = []): Resource54GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource54GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource55
     */
    public function withId ($ID): Resource55 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource55($uri);
    }
}
final class Resource54GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource54GetRequest
     */
    public function withCartId($cartId): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'cartId';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $cartId;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource54GetRequest
     */
    public function withCountry($country): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'country';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $country;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource54GetRequest
     */
    public function withState($state): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'state';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $state;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource54GetRequest
     */
    public function withCurrency($currency): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'currency';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $currency;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource54GetRequest
     */
    public function withWhere($where): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource54GetRequest
     */
    public function withSort($sort): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource54GetRequest
     */
    public function withLimit($limit): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource54GetRequest
     */
    public function withOffset($offset): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource55 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource55DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource55DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource55DeleteRequest::class);
    }
}
final class Resource55DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource55DeleteRequest
     */
    public function withVersion($version): Resource55DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource56 extends Resource {

    /**
     * @return Resource56GetRequest
     */
    public function get ($query = null, array $options = []): Resource56GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource56GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource57
     */
    public function withId ($ID): Resource57 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource57($uri);
    }
}
final class Resource56GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource56GetRequest
     */
    public function withWhere($where): Resource56GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource56GetRequest
     */
    public function withSort($sort): Resource56GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource56GetRequest
     */
    public function withLimit($limit): Resource56GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource56GetRequest
     */
    public function withOffset($offset): Resource56GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource57 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource57DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource57DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource57DeleteRequest::class);
    }
}
final class Resource57DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource57DeleteRequest
     */
    public function withVersion($version): Resource57DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource58 extends Resource {

    /**
     * @return Resource58GetRequest
     */
    public function get ($query = null, array $options = []): Resource58GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource58GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource59
     */
    public function withKey ($key): Resource59 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource59($uri);
    }

    /**
     * @return Resource60
     */
    public function withId ($ID): Resource60 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource60($uri);
    }
}
final class Resource58GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource58GetRequest
     */
    public function withWhere($where): Resource58GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource58GetRequest
     */
    public function withSort($sort): Resource58GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource58GetRequest
     */
    public function withLimit($limit): Resource58GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource58GetRequest
     */
    public function withOffset($offset): Resource58GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource59 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource59DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource59DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource59DeleteRequest::class);
    }
}
final class Resource59DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource59DeleteRequest
     */
    public function withVersion($version): Resource59DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource60 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource60DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource60DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource60DeleteRequest::class);
    }
}
final class Resource60DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource60DeleteRequest
     */
    public function withVersion($version): Resource60DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource61 extends Resource {

    /**
     * @return Resource61GetRequest
     */
    public function get ($query = null, array $options = []): Resource61GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource61GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource62
     */
    public function withId ($ID): Resource62 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource62($uri);
    }
}
final class Resource61GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource61GetRequest
     */
    public function withWhere($where): Resource61GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource61GetRequest
     */
    public function withSort($sort): Resource61GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource61GetRequest
     */
    public function withLimit($limit): Resource61GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource61GetRequest
     */
    public function withOffset($offset): Resource61GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource62 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource62DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource62DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource62DeleteRequest::class);
    }
}
final class Resource62DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource62DeleteRequest
     */
    public function withVersion($version): Resource62DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource63 extends Resource {

    /**
     * @return Resource63GetRequest
     */
    public function get ($query = null, array $options = []): Resource63GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource63GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource64
     */
    public function withKey ($key): Resource64 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource64($uri);
    }

    /**
     * @return Resource65
     */
    public function withId ($ID): Resource65 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource65($uri);
    }
}
final class Resource63GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource63GetRequest
     */
    public function withWhere($where): Resource63GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource63GetRequest
     */
    public function withSort($sort): Resource63GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource63GetRequest
     */
    public function withLimit($limit): Resource63GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource63GetRequest
     */
    public function withOffset($offset): Resource63GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource64 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource64DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource64DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource64DeleteRequest::class);
    }
}
final class Resource64DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource64DeleteRequest
     */
    public function withVersion($version): Resource64DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource65 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource65DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource65DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource65DeleteRequest::class);
    }
}
final class Resource65DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource65DeleteRequest
     */
    public function withVersion($version): Resource65DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource66 extends Resource {

    /**
     * @return Resource66GetRequest
     */
    public function get ($query = null, array $options = []): Resource66GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource66GetRequest::class);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource67
     */
    public function withId ($ID): Resource67 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource67($uri);
    }
}
final class Resource66GetRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource66GetRequest
     */
    public function withWhere($where): Resource66GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource66GetRequest
     */
    public function withSort($sort): Resource66GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource66GetRequest
     */
    public function withLimit($limit): Resource66GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @return Resource66GetRequest
     */
    public function withOffset($offset): Resource66GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource67 extends Resource {

    /**
     * @return RequestInterface
     */
    public function get ($query = null, array $options = []): RequestInterface {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options);
    }

    /**
     * @return RequestInterface
     */
    public function post ($body = null, array $options = []): RequestInterface {

        return $this->buildRequest('post', $this->getUri(), $body, $options);
    }

    /**
     * @return Resource67DeleteRequest
     */
    public function delete ($body = null, array $options = []): Resource67DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource67DeleteRequest::class);
    }
}
final class Resource67DeleteRequest extends Request {

    private $query;
    private $queryParts;

    /**
     * @return Resource67DeleteRequest
     */
    public function withVersion($version): Resource67DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}

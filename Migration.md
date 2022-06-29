# Guide to migrate from the PHP SDK 1.x to the PHP SDK 2.x

This guide helps developers to migrate from the version 1.x to the version 2.x of PHP SDK.

## Table of content

* [Client Configuration and Creation](#client-configuration-and-creation)
* [Timeout Setting](#timout-setting)
* [Headers](#headers)
* [Retry](#retry)
* [Draft Builder](#draft-builder)
* [Create Command](#create-command)
* [Create From Json](#create-from-json)
* [Update Command](#update-command)
* [Query - GetById](#query-getbyid)
* [Query](#query)

<a id="client-configuration-and-creation"></a>
### Client Configuration and Creation
To setup the Client, in the 1.x we use the **Config** class to add the config data and then the **Client** class to create the Client from the Config.
In the 2.x the **ClientCredentialsConfig** class sets up the config data such as *clientId* and *clientSecret* and the **ClientFactory** creates the client.
The benefit of the 2.x, is that through the **ClientFactory** class, there is the possibility to easily set up the available Middlewares such as: the **LOGGER**, the **RETRY**, the **HEADER**, as it will be mentioned in the [Retry](#retry) section.

1.x
```php
        $clientId = $_ENV['CTP_CLIENT_ID'] ?? '';
        $clientSecret = $_ENV['CTP_CLIENT_SECRET'] ?? '';
        $projectKey = $_ENV['CTP_PROJECT'] ?? '';
        
        $config = Config::fromArray([
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'project' => $projectKey
        ]);

        $config->setOauthUrl(self::OAUTH_URL)->setApiUrl(self::API_URL);
        $client = Client::ofConfig($config);
        $request = RequestBuilder::of()->project()->get();
        $response = $client->execute($request);
```
2.x
*For the rest of the *Migration Guideline* this part below will be replaced with* **$builder = $this->builder();** 
```php
        $clientId = $_ENV['CTP_CLIENT_ID'] ?? '';
        $clientSecret = $_ENV['CTP_CLIENT_SECRET'] ?? '';
        $projectKey = $_ENV['CTP_PROJECT'] ?? '';

        $authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new Config(['maxRetries' => 3]), $authConfig);

        $apiRequest = new ApiRequestBuilder($client);
        $request = $apiRequest->withProjectKey($projectKey)->get();
        $response = $request->execute();
```

<a id="timout-setting"></a>
### Timeout Setting
In both versions is the **execute()** method which sets the timeout. In alternative, the 2.x version is able to set the timeout from the creation of the client through **ClientFactory** (the example is below).

1.x
```php
        $options = ['timeout' => '45'];
        $request = RequestBuilder::of()->categories()->query();
        $response = $this->execute($this->client(), $request, $options);
```
2.x
```php
        $options = ['timeout' => '45'];
        $request = $this->builder()->with()->categories()->get();
        $response = $request->execute($options);
```
The setup of the timeout in the **ClientFactory**: the default value for the timeout is "60", see the *createGuzzleClientWithOptions()* method, otherwise it could be set up in the way described below:
```php
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'timeout' => 45]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $client = $request->execute();
```

<a id="headers"></a>
### Headers
To set *Headers*, in the 1.x it is possible in the **execute()** method itself and in the 2.x, it can be directly set during the building request with the *withHeader* method.
Like as the [timeout](#timeout-setting), in alternative, the 2.x version is able to set the headers from the creation of the client through **ClientFactory** (the example is below).

1.x
```php
        $client = $this->client();
        /** @var CategoryDraft $categoryDraft */
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $headers = ["foo" => "bar"];
        $response = $this->execute($client, $request, $headers);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        $request = $builder->with()->categories()->get()->withHeader("foo", "bar");
        $result = $request->execute();
```
The setup of the headers in the **ClientFactory**: the default value for the headers is an empty array, see the *createGuzzleClientWithOptions()* method, otherwise it could be set up in the way described below:
```php
        $authConfig = new ClientCredentialsConfig(new ClientCredentials($this->clientId, $this->clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new ConfigV2(['maxRetries' => 3, 'headers' => ["foo" => "bar"]]), $authConfig);
        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($this->projectKey)->get();
        $response = $request->execute();
```

<a id="retry"></a>
### Retry
In the 1.x, the *Retry* is handled through the client options, so with multidimensional array. And then, the creation of the Client, which here below there is another way to build it.

The 2.x is better structured because through the **MiddlewareFactory** is possible to set a middleware array through the **createRetryNAMiddleware** method, that helps in this case, to setup the *Retry*.

1.x
```php
        $config = Config::fromArray([
            'client_id' => self::CLIENT_ID,
            'client_secret' => self::CLIENT_SECRET,
            'project' => self::PROJECT_KEY
        ]);
        $maxRetries = 3;
        $clientOptions = [
            'middlewares' => [
                'retry' => Middleware::retry(
                    function ($retries, RequestInterface $request, ResponseInterface $response = null, RequestException $error = null) use ($maxRetries) {
                        return $retries < $maxRetries && ($error instanceof ConnectException || $response && $response->getStatusCode() >= 500);
                    }
                )
            ]
        ];
        $config->setClientOptions($clientOptions);
        $client = ClientFactory::of()->createClient($config, new Logger('test'));
```
2.x
```php
        $clientId = $_ENV['CTP_CLIENT_ID'] ?? '';
        $clientSecret = $_ENV['CTP_CLIENT_SECRET'] ?? '';
        $projectKey = $_ENV['CTP_PROJECT'] ?? '';
        
        $middlewares = [];
        $middlewares['retryNA'] = MiddlewareFactory::createRetryNAMiddleware($maxRetries = 3);

        $authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret));
        $client = ClientFactory::of()->createGuzzleClientForHandler(
            new ConfigV2(),
            OAuthHandlerFactory::ofAuthConfig($authConfig),
            null,
            $middlewares
        );

        $apiRequestBuilder = new ApiRequestBuilder($client);
        $request = $apiRequestBuilder->withProjectKey($projectKey)->get();

        $result = $request->execute();
```

<a id="draft-builder"></a>
### Draft Builder
About the *DraftBuilder* the main difference is that in the 2.x we introduced the **build** method to create objects, in this case the *DraftBuilder* object.
As can be seen below, the setters are being replaced by the *with* methods. 

1.x
```php
        $categoryDraft = CategoryDraft::ofNameAndSlug(LocalizedString::ofLangAndText('en', 'name'), LocalizedString::ofLangAndText('en', 'slug'))
                                ->setMetaDescription(LocalizedString::ofLangAndText('en', 'metaDescription'))
                                ->setMetaTitle(LocalizedString::ofLangAndText('en', 'metaTitle'))
                                ->setMetaKeywords(LocalizedString::ofLangAndText('en', 'metaKeywords'))
                                ->setExternalId("externalId");
```
2.x
```php
        $categoryDraft = CategoryDraftBuilder::of()
                                ->withName(LocalizedStringBuilder::of()->put('en', 'name')->build())
                                ->withSlug(LocalizedStringBuilder::of()->put('en', 'slug')->build())
                                ->withMetaDescription(LocalizedStringBuilder::of()->put('en', 'metaDescription')->build())
                                ->withMetaTitle(LocalizedStringBuilder::of()->put('en', 'metaTitle')->build())
                                ->withMetaKeywords(LocalizedStringBuilder::of()->put('en', 'metaKeywords')->build())
                                ->withExternalId("externalId")
                                ->build();
```

<a id="create-command"></a>
### Create Command
In the 2.x, we replaced the **RequestBuilder** class with **ApiRequestBuilder** to build the request (see [Client Configuration and Creation](#client-configuration-and-creation) section). 
There are not dedicated methods to build a request, like in this case the *create* method, but to have a request, it needs to have a draft to build and which is passed into the *post()* method.
In details:
- Call the **with()** method from the ApiRequestBuilder, it will get the Project Key, 
- Choose the Resource/Endpoint/Domain to call in this case is */categories* (the method to call is **categories()**)
- Call the method **post()** and passing in it the draft object (in this case the CategoryDraft) to create a request (in this case **ByProjectKeyCategoriesPost** request).
- Run the **execute()** method to create a new object (in this case a new Category object)

Here below the differences between the two versions:

1.x
```php
        $client = $this->client();
        $categoryDraft = CategoryDraft::of()
                                ->setName(LocalizedString::ofLangAndText('en', $this->uniqueString()))
                                ->setSlug(LocalizedString::ofLangAndText('en', $this->uniqueString()))
                                ->setKey($this->uniqueString());
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        $categoryDraft = CategoryDraftBuilder::of()
                                ->withName(LocalizedStringBuilder::of()->put('en', $this->uniqueString())->build())
                                ->withSlug(LocalizedStringBuilder::of()->put('en', $this->uniqueString())->build())
                                ->withKey($this->uniqueString())
                                ->build();
        $request = $builder->with()->categories()->post($categoryDraft);
        $result = $request->execute();
```

<a id="create-from-json"></a>
### Create From Json
The main difference is how to build the request, as explained in the [Create Command](#create-command).

1.x
```php
        $client = $this->client();
        $categoryDraft = CategoryDraft::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json")));

        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        /** @var CategoryDraft $categoryDraft */
        $categoryDraft = CategoryDraftModel::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json"), true));

        $request = $builder->with()->categories()->post($categoryDraft);
        $result = $request->execute();
```

<a id="update-command"></a>
### Update Command
Like the [Create Command](#create-command), there are not dedicate methods to build a request, like in this case the *update* method.
So to create this kind of requests, like the example below:
- Create the Action Model object, instantiating the related class to update the property and set the related property that it needs to be changed, in this case the class is *CategoryChangeNameActionModel*,
- Create the Update Action Collection from the Action Model that can be used to have multiple update actions to be applied using the *add()* method, in this case it's used the *CategoryUpdateActionCollection*,
- Create the Update Builder object, having the version (using *withVersion()* method) from the object that has to be modified and passing the collection of Actions through the method *withActions()*   
- Now the creation of the request:
  - follow the first 2 points of the [Create Command](#create-command)
  - Call the *withId() or withKey()* methods to select the object to update,
  - Call the *post()* method where passing the Update Builder object, in this case *CategoryUpdateBuilder*.

Here the differences:

1.x
```php
        $client = $this->client();

        /** @var Category $category */
        $request = RequestBuilder::of()->categories()->update($category)
                    ->addAction(
                        CategoryChangeNameAction::ofName(
                            LocalizedString::ofLangAndText('en', 'name')
                        )
                    );
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();

        $newName = LocalizedStringBuilder::of()->put('en', "new-name")->build();
        $updateAction = new CategoryChangeNameActionModel();
        $updateAction->setName($newName);
        $updateActionCollection = new CategoryUpdateActionCollection();
        $updateActionCollection->add($updateAction);
        /** @var Category $category */
        $request = $builder->with()->categories()->withId($category->getId())
            ->post(
                CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build()
            );
        $result = $request->execute();
```

<a id="query-getbyid"></a>
### Query - GetById
The *Query by Id* command is slightly different compared to the [Create Command](#create-command) and to the [Update Command](#update-command).
Here how to create the related request:
- follow the first 2 points of the [Create Command](#create-command)
- call the *withId()* method to select the Id that we are looking for,
- call the *get()* method to retrieve the related object of our request, which in the case below is *ByProjectKeyCategoriesByIDGet* object,
- then it's possible to add other kind of filters such as *withExpand()*, of course if the API allows


1.x
```php
        $client = $this->client();
        /** @var Category $category */
        $request = RequestBuilder::of()->categories()->getById($category->getId())->expand('parent');
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        /** @var CategoryBuilder $category */
        $request = $builder->with()->categories()->withId($category->getId())->get()->withExpand('parent');
        $result = $request->execute();
```

<a id="query"></a>
### Query
Here another example to query the request using lambda expressions. You may immediately notice that the structure does not change comparing to the other requests.

1.x
```php
        $client = $this->client();

        $request = RequestBuilder::of()->categories()->query()->where('id = :id');
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);

```
2.x
```php
        $builder = $this->builder();
        $request = $builder->with()->categories()->get()->withWhere('id = :id')->withPredicateVar("id", "id123");
        $result = $request->execute();
```

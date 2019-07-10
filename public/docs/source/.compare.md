---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_5e901bbc73b2f95e077625c8fdf1a97a -->
## /
> Example request:

```bash
curl -X POST "/" \
    -H "Content-Type: application/json" \
    -d '{"title":"qui","body":"voluptates","type":"ut","author_id":2,"thumbnail":"odio"}'

```

```javascript
const url = new URL("/");

    let params = {
            "user_id": "me",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "title": "qui",
    "body": "voluptates",
    "type": "ut",
    "author_id": 2,
    "thumbnail": "odio"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 4,
    "name": "Jessica Jones",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`POST /`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The title of the post.
    body | string |  required  | The content of the post.
    type | string |  optional  | The type of post to create. Defaults to 'textophonious'.
    author_id | integer |  optional  | the ID of the author.
    thumbnail | image |  optional  | This is required if the post type is 'imagelicious'.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    user_id |  required  | The id of the user.

<!-- END_5e901bbc73b2f95e077625c8fdf1a97a -->

<!-- START_3de610338a06dcd6add1b172bb7edd48 -->
## /api/post
> Example request:

```bash
curl -X POST "/api/post" 
```

```javascript
const url = new URL("/api/post");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/post`


<!-- END_3de610338a06dcd6add1b172bb7edd48 -->

<!-- START_a0a0c28cddb63dbdbc3e3e6dd32f197a -->
## /api/post
> Example request:

```bash
curl -X GET -G "/api/post" \
    -H "Content-Type: application/json" \
    -d '{"page":"odio"}'

```

```javascript
const url = new URL("/api/post");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "page": "odio"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "Widgets": 4,
    "name": "Jessica Jones",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET /api/post`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    page | integer. |  optional  | 

<!-- END_a0a0c28cddb63dbdbc3e3e6dd32f197a -->

<!-- START_162660cb176a33fbd0f689c1ba502e2a -->
## /api/post/{id:[0-9]+}
> Example request:

```bash
curl -X GET -G "/api/post/1" 
```

```javascript
const url = new URL("/api/post/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/post/{id:[0-9]+}`


<!-- END_162660cb176a33fbd0f689c1ba502e2a -->



# LibsLumen
Bộ thư viện core được viết dựa trên lumen

# Tự động tạo document api
 - Tạo document <code>php artisan apidoc:generate</code>
 - update document khi source code thay đổi
 <code>php artisan apidoc:rebuild</code>
 - Link truy cập http://<domain>/public/docs/index.html
 * chú ý: thêm tham số để document tạo ra được chi tiết
 /**
 * @queryParam user_id required The id of the user. Example: me
 * @bodyParam title string required The title of the post.
 * @bodyParam body string required The content of the post.
 * @bodyParam type string The type of post to create. Defaults to 'textophonious'.
 * @bodyParam author_id int the ID of the author. Example: 2
 * @bodyParam thumbnail image This is required if the post type is 'imagelicious'.
 * @response {
 *  "id": 4,
 *  "name": "Jessica Jones",
 *  "roles": ["admin"]
 * }
 * @response 404 {
 *  "message": "No query results for model [\App\User]"
 * }
 */
 # Sử dụng migration
 - Tạo  calss ánh xạ   table <code>php artisan make:migration create_users_table</code>
 - Tiến hành tạo table trên database <code>php artisan migrate</code>
 # Sử dụng seeder
 - để tạo ra dữ liệu demo trong quá trình dev. ở đây tôi dùng Faker để tạo dữ liệu insert
 - Trong databaseSeeder các bạn khai báo. vd:
  <p> <code>  $faker = Factory::create();
        DB::table('Post')->insert([
            'Title' =>$faker->title,
            'Description' => $faker->text,
            'Content' => $faker->text
        ]);
    </code></p>
   - để tiến hành insert dữ liệu vào database trên cli run command:
   <code>php artisan db:seed</code>

{"changed":true,"filter":false,"title":"2022_08_08_125820_create_friends_game_category.php","tooltip":"/gameboard/database/migrations/2022_08_08_125820_create_friends_game_category.php","value":"<?php\n\nuse Illuminate\\Database\\Migrations\\Migration;\nuse Illuminate\\Database\\Schema\\Blueprint;\nuse Illuminate\\Support\\Facades\\Schema;\n\nclass CreateFriendsGameCategory extends Migration\n{\n    /**\n     * Run the migrations.\n     *\n     * @return void\n     */\n    public function up()\n    {\n        Schema::create('friends_game_category', function (Blueprint $table) {\n            $table->bigIncrements('id');\n            $table->integer('friends_id');\n            $table->integer('game_category_id');\n            $table->timestamps();\n        });\n    }\n\n    /**\n     * Reverse the migrations.\n     *\n     * @return void\n     */\n    public function down()\n    {\n        Schema::dropIfExists('friends_game_category');\n    }\n}\n","undoManager":{"mark":-2,"position":19,"stack":[[{"start":{"row":16,"column":40},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]},{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["$"]},{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":["t"]},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["a"]},{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["b"]}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":["l"],"id":3},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["e"]},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["-"]},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":[">"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["i"],"id":4},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["n"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["t"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["e"]},{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["g"]},{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":26},"end":{"row":17,"column":27},"action":"insert","lines":["r"],"id":5}],[{"start":{"row":17,"column":27},"end":{"row":17,"column":29},"action":"insert","lines":["()"],"id":6}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":30},"action":"insert","lines":["''"],"id":7}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["f"],"id":8},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["r"]},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["i"]},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["e"]},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["n"]},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["s"],"id":9}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["_"],"id":10},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["i"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":[";"],"id":11}],[{"start":{"row":17,"column":42},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":18,"column":0},"end":{"row":18,"column":12},"action":"insert","lines":["            "]},{"start":{"row":18,"column":12},"end":{"row":18,"column":13},"action":"insert","lines":["$"]},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"insert","lines":["t"]},{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"insert","lines":["a"]}],[{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"insert","lines":["b"],"id":13},{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"insert","lines":["l"]},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"insert","lines":["e"]},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["-"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"insert","lines":[">"]}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"insert","lines":["i"],"id":14},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["n"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["t"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["e"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["g"]},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["e"]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":27},"end":{"row":18,"column":29},"action":"insert","lines":["()"],"id":15}],[{"start":{"row":18,"column":28},"end":{"row":18,"column":30},"action":"insert","lines":["''"],"id":16}],[{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["g"],"id":17},{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["a"]},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["m"]},{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["e"]},{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["_"]}],[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["c"],"id":18},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":["a"]},{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["t"]},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"insert","lines":["e"]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"insert","lines":["g"]},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"insert","lines":["o"]},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"insert","lines":["y"],"id":19}],[{"start":{"row":18,"column":44},"end":{"row":18,"column":45},"action":"insert","lines":[";"],"id":20}],[{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"insert","lines":["_"],"id":21},{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"insert","lines":["i"]},{"start":{"row":18,"column":44},"end":{"row":18,"column":45},"action":"insert","lines":["d"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":45},"end":{"row":18,"column":45},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":25,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1659963501754}
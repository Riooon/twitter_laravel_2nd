{"filter":false,"title":"2020_07_23_013137_add_unique_to_follows.php","tooltip":"/twitter/database/migrations/2020_07_23_013137_add_unique_to_follows.php","undoManager":{"mark":15,"position":15,"stack":[[{"start":{"row":16,"column":14},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":18,"column":70},"action":"insert","lines":["$table->unique(['user_id', 'post_id'],    // []内にunique制約を付けたいカラム名を並べる","                       'unique_user_id_post_id'); // 第2引数はindex名(省略可能)"],"id":3}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":47},"action":"remove","lines":["                       'unique_user_id_post_id'"],"id":4},{"start":{"row":17,"column":82},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"remove","lines":["る"],"id":5},{"start":{"row":17,"column":80},"end":{"row":17,"column":81},"action":"remove","lines":["べ"]},{"start":{"row":17,"column":79},"end":{"row":17,"column":80},"action":"remove","lines":["並"]},{"start":{"row":17,"column":78},"end":{"row":17,"column":79},"action":"remove","lines":["を"]},{"start":{"row":17,"column":77},"end":{"row":17,"column":78},"action":"remove","lines":["名"]},{"start":{"row":17,"column":76},"end":{"row":17,"column":77},"action":"remove","lines":["ム"]},{"start":{"row":17,"column":75},"end":{"row":17,"column":76},"action":"remove","lines":["ラ"]},{"start":{"row":17,"column":74},"end":{"row":17,"column":75},"action":"remove","lines":["カ"]},{"start":{"row":17,"column":73},"end":{"row":17,"column":74},"action":"remove","lines":["い"]},{"start":{"row":17,"column":72},"end":{"row":17,"column":73},"action":"remove","lines":["た"]},{"start":{"row":17,"column":71},"end":{"row":17,"column":72},"action":"remove","lines":["け"]},{"start":{"row":17,"column":70},"end":{"row":17,"column":71},"action":"remove","lines":["付"]},{"start":{"row":17,"column":69},"end":{"row":17,"column":70},"action":"remove","lines":["を"]},{"start":{"row":17,"column":68},"end":{"row":17,"column":69},"action":"remove","lines":["約"]},{"start":{"row":17,"column":67},"end":{"row":17,"column":68},"action":"remove","lines":["制"]},{"start":{"row":17,"column":66},"end":{"row":17,"column":67},"action":"remove","lines":["e"]},{"start":{"row":17,"column":65},"end":{"row":17,"column":66},"action":"remove","lines":["u"]},{"start":{"row":17,"column":64},"end":{"row":17,"column":65},"action":"remove","lines":["q"]},{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"remove","lines":["i"]}],[{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"remove","lines":["n"],"id":6},{"start":{"row":17,"column":61},"end":{"row":17,"column":62},"action":"remove","lines":["u"]},{"start":{"row":17,"column":60},"end":{"row":17,"column":61},"action":"remove","lines":["に"]},{"start":{"row":17,"column":59},"end":{"row":17,"column":60},"action":"remove","lines":["内"]},{"start":{"row":17,"column":58},"end":{"row":17,"column":59},"action":"remove","lines":["]"]},{"start":{"row":17,"column":57},"end":{"row":17,"column":58},"action":"remove","lines":["["]},{"start":{"row":17,"column":56},"end":{"row":17,"column":57},"action":"remove","lines":[" "]},{"start":{"row":17,"column":55},"end":{"row":17,"column":56},"action":"remove","lines":["/"]},{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"remove","lines":["/"]},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"remove","lines":[" "]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"remove","lines":[" "]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"remove","lines":[" "]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":[" "]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"remove","lines":[","]}],[{"start":{"row":17,"column":51},"end":{"row":17,"column":72},"action":"remove","lines":[" // 第2引数はindex名(省略可能)"],"id":7}],[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"remove","lines":["d"],"id":8},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"remove","lines":["i"]},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"remove","lines":["_"]},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"remove","lines":["r"]},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"remove","lines":["e"]},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"remove","lines":["s"]},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"remove","lines":["u"]}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["i"],"id":9},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["s"]},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["_"]},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["f"]},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["o"]},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["l"]},{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["l"]},{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["o"]}],[{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["w"],"id":10},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["e"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"remove","lines":["d"],"id":11},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"remove","lines":["i"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"remove","lines":["_"]},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"remove","lines":["t"]},{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"remove","lines":["s"]},{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"remove","lines":["o"]},{"start":{"row":17,"column":44},"end":{"row":17,"column":45},"action":"remove","lines":["p"]}],[{"start":{"row":17,"column":44},"end":{"row":17,"column":45},"action":"insert","lines":["f"],"id":12},{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"insert","lines":["o"]},{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"insert","lines":["l"]},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"insert","lines":["l"]},{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"insert","lines":["o"]},{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"insert","lines":["w"]},{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["e"]},{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"insert","lines":["d"]},{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["_"]},{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"insert","lines":["b"]},{"start":{"row":17,"column":54},"end":{"row":17,"column":55},"action":"insert","lines":["y"]}],[{"start":{"row":29,"column":14},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":30,"column":0},"end":{"row":30,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":30,"column":12},"end":{"row":30,"column":59},"action":"insert","lines":["$table->unique(['is_followed', 'followed_by']);"],"id":14}],[{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"insert","lines":["d"],"id":15},{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"insert","lines":["r"]},{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"insert","lines":["o"]},{"start":{"row":30,"column":23},"end":{"row":30,"column":24},"action":"insert","lines":["p"]}],[{"start":{"row":30,"column":24},"end":{"row":30,"column":25},"action":"remove","lines":["u"],"id":16}],[{"start":{"row":30,"column":24},"end":{"row":30,"column":25},"action":"insert","lines":["U"],"id":17}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":30,"column":63},"end":{"row":30,"column":63},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1595468010835,"hash":"2a6f7ff73d9865ff81d102e90a09c977684fc25d"}
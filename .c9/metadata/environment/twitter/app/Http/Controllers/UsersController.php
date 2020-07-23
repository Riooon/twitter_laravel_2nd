{"filter":false,"title":"UsersController.php","tooltip":"/twitter/app/Http/Controllers/UsersController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":27,"column":14},"end":{"row":27,"column":15},"action":"insert","lines":["s"],"id":213}],[{"start":{"row":28,"column":61},"end":{"row":28,"column":62},"action":"insert","lines":["s"],"id":214}],[{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"insert","lines":["s"],"id":215}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":7},"action":"insert","lines":["// "],"id":216}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":7},"action":"insert","lines":["// "],"id":217}],[{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"remove","lines":["="],"id":218}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":7},"action":"remove","lines":["// "],"id":219}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":7},"action":"remove","lines":["// "],"id":220}],[{"start":{"row":29,"column":5},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":255},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":4},"end":{"row":31,"column":0},"action":"insert","lines":["",""]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":31,"column":4},"end":{"row":34,"column":5},"action":"insert","lines":["public function account(User $account){","        $tweets = User::join('tweets', 'tweets.user_id', '=', 'users.id')->orderBy('tweets.created_at', 'desc')->where('user_id', $account->id)->get();","        return view('account', ['account' => $account, 'tweets' => $tweets]);","    }"],"id":256}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":27},"action":"remove","lines":["account"],"id":257},{"start":{"row":31,"column":20},"end":{"row":31,"column":26},"action":"insert","lines":["follow"]}],[{"start":{"row":31,"column":32},"end":{"row":31,"column":40},"action":"remove","lines":["$account"],"id":258},{"start":{"row":31,"column":32},"end":{"row":31,"column":38},"action":"insert","lines":["follow"]}],[{"start":{"row":31,"column":32},"end":{"row":31,"column":33},"action":"insert","lines":["$"],"id":259}],[{"start":{"row":31,"column":41},"end":{"row":33,"column":77},"action":"remove","lines":["","        $tweets = User::join('tweets', 'tweets.user_id', '=', 'users.id')->orderBy('tweets.created_at', 'desc')->where('user_id', $account->id)->get();","        return view('account', ['account' => $account, 'tweets' => $tweets]);"],"id":260}],[{"start":{"row":31,"column":41},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":261},{"start":{"row":32,"column":0},"end":{"row":32,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":32,"column":8},"end":{"row":37,"column":29},"action":"insert","lines":["$tweets = new Tweet;","        $tweets->user_id = $request->user_id;","        $tweets->text = $request->text;","        $tweets->tweeted_at = '2017-03-07 00:00:00';","        $tweets->save(); ","        return redirect('/');"],"id":262}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"remove","lines":["    "],"id":263},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"remove","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"remove","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"remove","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"remove","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "],"id":264},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":15},"action":"remove","lines":["$tweets"],"id":265},{"start":{"row":32,"column":8},"end":{"row":32,"column":15},"action":"insert","lines":["$follow"]}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":15},"action":"remove","lines":["$tweets"],"id":266},{"start":{"row":33,"column":8},"end":{"row":33,"column":15},"action":"insert","lines":["$follow"]}],[{"start":{"row":34,"column":8},"end":{"row":34,"column":15},"action":"remove","lines":["$tweets"],"id":267},{"start":{"row":34,"column":8},"end":{"row":34,"column":15},"action":"insert","lines":["$follow"]}],[{"start":{"row":34,"column":39},"end":{"row":35,"column":52},"action":"remove","lines":["","        $tweets->tweeted_at = '2017-03-07 00:00:00';"],"id":268}],[{"start":{"row":31,"column":27},"end":{"row":31,"column":39},"action":"remove","lines":["User $follow"],"id":269},{"start":{"row":31,"column":27},"end":{"row":31,"column":43},"action":"insert","lines":["Request $request"]}],[{"start":{"row":32,"column":15},"end":{"row":32,"column":16},"action":"insert","lines":["s"],"id":270}],[{"start":{"row":32,"column":23},"end":{"row":32,"column":28},"action":"remove","lines":["Tweet"],"id":271},{"start":{"row":32,"column":23},"end":{"row":32,"column":24},"action":"insert","lines":["F"]},{"start":{"row":32,"column":24},"end":{"row":32,"column":25},"action":"insert","lines":["o"]},{"start":{"row":32,"column":25},"end":{"row":32,"column":26},"action":"insert","lines":["l"]},{"start":{"row":32,"column":26},"end":{"row":32,"column":27},"action":"insert","lines":["l"]},{"start":{"row":32,"column":27},"end":{"row":32,"column":28},"action":"insert","lines":["o"]},{"start":{"row":32,"column":28},"end":{"row":32,"column":29},"action":"insert","lines":["w"]}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":15},"action":"remove","lines":["$follow"],"id":272},{"start":{"row":33,"column":8},"end":{"row":33,"column":16},"action":"insert","lines":["$follows"]}],[{"start":{"row":34,"column":8},"end":{"row":34,"column":15},"action":"remove","lines":["$follow"],"id":273},{"start":{"row":34,"column":8},"end":{"row":34,"column":16},"action":"insert","lines":["$follows"]}],[{"start":{"row":33,"column":18},"end":{"row":33,"column":25},"action":"remove","lines":["user_id"],"id":274},{"start":{"row":33,"column":18},"end":{"row":33,"column":19},"action":"insert","lines":["i"]},{"start":{"row":33,"column":19},"end":{"row":33,"column":20},"action":"insert","lines":["s"]},{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"insert","lines":["_"]}],[{"start":{"row":33,"column":18},"end":{"row":33,"column":21},"action":"remove","lines":["is_"],"id":275},{"start":{"row":33,"column":18},"end":{"row":33,"column":29},"action":"insert","lines":["is_followed"]}],[{"start":{"row":34,"column":18},"end":{"row":34,"column":22},"action":"remove","lines":["text"],"id":276},{"start":{"row":34,"column":18},"end":{"row":34,"column":19},"action":"insert","lines":["t"]},{"start":{"row":34,"column":19},"end":{"row":34,"column":20},"action":"insert","lines":["w"]},{"start":{"row":34,"column":20},"end":{"row":34,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":34,"column":18},"end":{"row":34,"column":21},"action":"remove","lines":["twe"],"id":277},{"start":{"row":34,"column":18},"end":{"row":34,"column":28},"action":"insert","lines":["tweeted_at"]}],[{"start":{"row":34,"column":27},"end":{"row":34,"column":28},"action":"remove","lines":["t"],"id":278},{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"remove","lines":["a"]}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"insert","lines":["b"],"id":279},{"start":{"row":34,"column":27},"end":{"row":34,"column":28},"action":"insert","lines":["y"]}],[{"start":{"row":34,"column":18},"end":{"row":34,"column":28},"action":"remove","lines":["tweeted_by"],"id":280},{"start":{"row":34,"column":18},"end":{"row":34,"column":19},"action":"insert","lines":["f"]},{"start":{"row":34,"column":19},"end":{"row":34,"column":20},"action":"insert","lines":["o"]},{"start":{"row":34,"column":20},"end":{"row":34,"column":21},"action":"insert","lines":["l"]},{"start":{"row":34,"column":21},"end":{"row":34,"column":22},"action":"insert","lines":["l"]},{"start":{"row":34,"column":22},"end":{"row":34,"column":23},"action":"insert","lines":["o"]},{"start":{"row":34,"column":23},"end":{"row":34,"column":24},"action":"insert","lines":["w"]},{"start":{"row":34,"column":24},"end":{"row":34,"column":25},"action":"insert","lines":["e"]}],[{"start":{"row":34,"column":18},"end":{"row":34,"column":25},"action":"remove","lines":["followe"],"id":281},{"start":{"row":34,"column":18},"end":{"row":34,"column":27},"action":"insert","lines":["followers"]}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"remove","lines":["s"],"id":282},{"start":{"row":34,"column":25},"end":{"row":34,"column":26},"action":"remove","lines":["r"]},{"start":{"row":34,"column":24},"end":{"row":34,"column":25},"action":"remove","lines":["e"]}],[{"start":{"row":34,"column":24},"end":{"row":34,"column":25},"action":"insert","lines":["e"],"id":283},{"start":{"row":34,"column":25},"end":{"row":34,"column":26},"action":"insert","lines":["d"]},{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"insert","lines":["/"]}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"remove","lines":["/"],"id":284}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"insert","lines":["_"],"id":285},{"start":{"row":34,"column":27},"end":{"row":34,"column":28},"action":"insert","lines":["b"]}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"insert","lines":["u"],"id":286}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"remove","lines":["u"],"id":287}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"insert","lines":["u"],"id":288}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"remove","lines":["u"],"id":289}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"insert","lines":["y"],"id":290}],[{"start":{"row":33,"column":42},"end":{"row":33,"column":49},"action":"remove","lines":["user_id"],"id":291},{"start":{"row":33,"column":42},"end":{"row":33,"column":53},"action":"insert","lines":["is_followed"]}],[{"start":{"row":34,"column":42},"end":{"row":34,"column":46},"action":"remove","lines":["text"],"id":292},{"start":{"row":34,"column":42},"end":{"row":34,"column":53},"action":"insert","lines":["followed_by"]}],[{"start":{"row":35,"column":8},"end":{"row":35,"column":15},"action":"remove","lines":["$tweets"],"id":293},{"start":{"row":35,"column":8},"end":{"row":35,"column":16},"action":"insert","lines":["$follows"]}],[{"start":{"row":30,"column":0},"end":{"row":37,"column":5},"action":"remove","lines":["    ","    public function follow(Request $request){","        $follows = new Follow;","        $follows->is_followed = $request->is_followed;","        $follows->followed_by = $request->followed_by;","        $follows->save(); ","        return redirect('/');","    }"],"id":294}],[{"start":{"row":29,"column":5},"end":{"row":30,"column":0},"action":"remove","lines":["",""],"id":295}],[{"start":{"row":6,"column":13},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":296}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":13},"action":"insert","lines":["use App\\User;"],"id":297}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":12},"action":"remove","lines":["User"],"id":298},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["F"]},{"start":{"row":7,"column":9},"end":{"row":7,"column":10},"action":"insert","lines":["o"]},{"start":{"row":7,"column":10},"end":{"row":7,"column":11},"action":"insert","lines":["l"]},{"start":{"row":7,"column":11},"end":{"row":7,"column":12},"action":"insert","lines":["l"]},{"start":{"row":7,"column":12},"end":{"row":7,"column":13},"action":"insert","lines":["o"]},{"start":{"row":7,"column":13},"end":{"row":7,"column":14},"action":"insert","lines":["w"]}],[{"start":{"row":28,"column":151},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":299},{"start":{"row":29,"column":0},"end":{"row":29,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":29,"column":8},"end":{"row":29,"column":131},"action":"insert","lines":["$followings = Follow::join('users', 'follows.is_followed', '=', 'users.id')->where('followed_by', Auth::user()->id)->get();"],"id":300}],[{"start":{"row":29,"column":131},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":301},{"start":{"row":30,"column":0},"end":{"row":30,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":30,"column":8},"end":{"row":30,"column":130},"action":"insert","lines":["$followers = Follow::join('users', 'follows.followed_by', '=', 'users.id')->where('is_followed', Auth::user()->id)->get();"],"id":302}],[{"start":{"row":29,"column":130},"end":{"row":29,"column":131},"action":"insert","lines":["-"],"id":303},{"start":{"row":29,"column":131},"end":{"row":29,"column":132},"action":"insert","lines":[">"]},{"start":{"row":29,"column":132},"end":{"row":29,"column":133},"action":"insert","lines":["c"]}],[{"start":{"row":29,"column":133},"end":{"row":29,"column":134},"action":"insert","lines":["o"],"id":304},{"start":{"row":29,"column":134},"end":{"row":29,"column":135},"action":"insert","lines":["u"]},{"start":{"row":29,"column":135},"end":{"row":29,"column":136},"action":"insert","lines":["n"]},{"start":{"row":29,"column":136},"end":{"row":29,"column":137},"action":"insert","lines":["t"]}],[{"start":{"row":30,"column":129},"end":{"row":30,"column":130},"action":"insert","lines":["="],"id":305}],[{"start":{"row":30,"column":129},"end":{"row":30,"column":130},"action":"remove","lines":["="],"id":306}],[{"start":{"row":30,"column":129},"end":{"row":30,"column":130},"action":"insert","lines":["="],"id":307},{"start":{"row":30,"column":130},"end":{"row":30,"column":131},"action":"insert","lines":["."]},{"start":{"row":30,"column":131},"end":{"row":30,"column":132},"action":"insert","lines":["c"]},{"start":{"row":30,"column":132},"end":{"row":30,"column":133},"action":"insert","lines":["o"]},{"start":{"row":30,"column":133},"end":{"row":30,"column":134},"action":"insert","lines":["u"]},{"start":{"row":30,"column":134},"end":{"row":30,"column":135},"action":"insert","lines":["n"]},{"start":{"row":30,"column":135},"end":{"row":30,"column":136},"action":"insert","lines":["t"]}],[{"start":{"row":30,"column":130},"end":{"row":30,"column":131},"action":"remove","lines":["."],"id":308},{"start":{"row":30,"column":129},"end":{"row":30,"column":130},"action":"remove","lines":["="]}],[{"start":{"row":30,"column":129},"end":{"row":30,"column":130},"action":"insert","lines":["-"],"id":309},{"start":{"row":30,"column":130},"end":{"row":30,"column":131},"action":"insert","lines":[">"]}],[{"start":{"row":29,"column":106},"end":{"row":29,"column":122},"action":"remove","lines":["Auth::user()->id"],"id":310},{"start":{"row":29,"column":106},"end":{"row":29,"column":114},"action":"insert","lines":["$account"]}],[{"start":{"row":30,"column":105},"end":{"row":30,"column":121},"action":"remove","lines":["Auth::user()->id"],"id":311},{"start":{"row":30,"column":105},"end":{"row":30,"column":113},"action":"insert","lines":["$account"]}],[{"start":{"row":30,"column":113},"end":{"row":30,"column":114},"action":"insert","lines":["-"],"id":312},{"start":{"row":30,"column":114},"end":{"row":30,"column":115},"action":"insert","lines":[">"]},{"start":{"row":30,"column":115},"end":{"row":30,"column":116},"action":"insert","lines":["i"]},{"start":{"row":30,"column":116},"end":{"row":30,"column":117},"action":"insert","lines":["d"]}],[{"start":{"row":29,"column":114},"end":{"row":29,"column":115},"action":"insert","lines":["-"],"id":313},{"start":{"row":29,"column":115},"end":{"row":29,"column":116},"action":"insert","lines":[">"]},{"start":{"row":29,"column":116},"end":{"row":29,"column":117},"action":"insert","lines":["i"]},{"start":{"row":29,"column":117},"end":{"row":29,"column":118},"action":"insert","lines":["d"]}],[{"start":{"row":31,"column":74},"end":{"row":31,"column":75},"action":"insert","lines":[","],"id":314}],[{"start":{"row":31,"column":75},"end":{"row":31,"column":76},"action":"insert","lines":[" "],"id":315}],[{"start":{"row":31,"column":76},"end":{"row":31,"column":78},"action":"insert","lines":["''"],"id":316}],[{"start":{"row":31,"column":77},"end":{"row":31,"column":78},"action":"remove","lines":["'"],"id":317},{"start":{"row":31,"column":76},"end":{"row":31,"column":77},"action":"remove","lines":["'"]},{"start":{"row":31,"column":75},"end":{"row":31,"column":76},"action":"remove","lines":[" "]},{"start":{"row":31,"column":74},"end":{"row":31,"column":75},"action":"remove","lines":[","]}],[{"start":{"row":30,"column":133},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":318},{"start":{"row":31,"column":0},"end":{"row":31,"column":8},"action":"insert","lines":["        "]},{"start":{"row":31,"column":8},"end":{"row":32,"column":0},"action":"insert","lines":["",""]},{"start":{"row":32,"column":0},"end":{"row":32,"column":8},"action":"insert","lines":["        "]},{"start":{"row":32,"column":8},"end":{"row":32,"column":9},"action":"insert","lines":["d"]},{"start":{"row":32,"column":9},"end":{"row":32,"column":10},"action":"insert","lines":["d"]}],[{"start":{"row":32,"column":10},"end":{"row":32,"column":12},"action":"insert","lines":["()"],"id":319}],[{"start":{"row":32,"column":11},"end":{"row":32,"column":12},"action":"insert","lines":["f"],"id":320},{"start":{"row":32,"column":12},"end":{"row":32,"column":13},"action":"insert","lines":["o"]},{"start":{"row":32,"column":13},"end":{"row":32,"column":14},"action":"insert","lines":["l"]},{"start":{"row":32,"column":14},"end":{"row":32,"column":15},"action":"insert","lines":["l"]},{"start":{"row":32,"column":15},"end":{"row":32,"column":16},"action":"insert","lines":["o"]},{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"insert","lines":["w"]},{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"insert","lines":["e"]},{"start":{"row":32,"column":18},"end":{"row":32,"column":19},"action":"insert","lines":["r"]}],[{"start":{"row":32,"column":18},"end":{"row":32,"column":19},"action":"remove","lines":["r"],"id":321},{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"remove","lines":["e"]},{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"remove","lines":["w"]}],[{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"insert","lines":["i"],"id":322},{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"insert","lines":["n"]},{"start":{"row":32,"column":18},"end":{"row":32,"column":19},"action":"insert","lines":["g"]},{"start":{"row":32,"column":19},"end":{"row":32,"column":20},"action":"insert","lines":["s"]}],[{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"insert","lines":["w"],"id":323}],[{"start":{"row":32,"column":22},"end":{"row":32,"column":23},"action":"insert","lines":[";"],"id":324}],[{"start":{"row":29,"column":133},"end":{"row":29,"column":135},"action":"insert","lines":["()"],"id":325}],[{"start":{"row":30,"column":132},"end":{"row":30,"column":134},"action":"insert","lines":["()"],"id":326}],[{"start":{"row":32,"column":11},"end":{"row":32,"column":12},"action":"insert","lines":["$"],"id":327}],[{"start":{"row":32,"column":11},"end":{"row":32,"column":22},"action":"remove","lines":["$followings"],"id":328},{"start":{"row":32,"column":11},"end":{"row":32,"column":21},"action":"insert","lines":["$followers"]}],[{"start":{"row":33,"column":75},"end":{"row":33,"column":76},"action":"insert","lines":[","],"id":329}],[{"start":{"row":33,"column":76},"end":{"row":33,"column":77},"action":"insert","lines":[" "],"id":330}],[{"start":{"row":33,"column":77},"end":{"row":33,"column":79},"action":"insert","lines":["''"],"id":331}],[{"start":{"row":33,"column":78},"end":{"row":33,"column":79},"action":"insert","lines":[";"],"id":332}],[{"start":{"row":33,"column":79},"end":{"row":33,"column":80},"action":"remove","lines":["'"],"id":333},{"start":{"row":33,"column":78},"end":{"row":33,"column":79},"action":"remove","lines":[";"]},{"start":{"row":33,"column":77},"end":{"row":33,"column":78},"action":"remove","lines":["'"]},{"start":{"row":33,"column":76},"end":{"row":33,"column":77},"action":"remove","lines":[" "]},{"start":{"row":33,"column":75},"end":{"row":33,"column":76},"action":"remove","lines":[","]}],[{"start":{"row":33,"column":75},"end":{"row":33,"column":97},"action":"insert","lines":[", 'tweets' => $tweets]"],"id":334}],[{"start":{"row":33,"column":97},"end":{"row":33,"column":119},"action":"insert","lines":[", 'tweets' => $tweets]"],"id":335}],[{"start":{"row":33,"column":96},"end":{"row":33,"column":97},"action":"remove","lines":["]"],"id":336}],[{"start":{"row":33,"column":74},"end":{"row":33,"column":75},"action":"remove","lines":["]"],"id":337}],[{"start":{"row":33,"column":77},"end":{"row":33,"column":83},"action":"remove","lines":["tweets"],"id":338},{"start":{"row":33,"column":77},"end":{"row":33,"column":87},"action":"insert","lines":["followings"]}],[{"start":{"row":33,"column":92},"end":{"row":33,"column":99},"action":"remove","lines":["$tweets"],"id":340},{"start":{"row":33,"column":92},"end":{"row":33,"column":93},"action":"insert","lines":["$"]}],[{"start":{"row":33,"column":93},"end":{"row":33,"column":103},"action":"insert","lines":["followings"],"id":341}],[{"start":{"row":33,"column":106},"end":{"row":33,"column":112},"action":"remove","lines":["tweets"],"id":342},{"start":{"row":33,"column":106},"end":{"row":33,"column":115},"action":"insert","lines":["followers"]}],[{"start":{"row":33,"column":120},"end":{"row":33,"column":127},"action":"remove","lines":["$tweets"],"id":343},{"start":{"row":33,"column":120},"end":{"row":33,"column":121},"action":"insert","lines":["$"]}],[{"start":{"row":33,"column":121},"end":{"row":33,"column":130},"action":"insert","lines":["followers"],"id":344}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":23},"action":"remove","lines":["dd($followers);"],"id":345},{"start":{"row":32,"column":4},"end":{"row":32,"column":8},"action":"remove","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"remove","lines":["    "]},{"start":{"row":31,"column":8},"end":{"row":32,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":29,"column":18},"end":{"row":29,"column":19},"action":"remove","lines":["s"],"id":346}],[{"start":{"row":32,"column":86},"end":{"row":32,"column":87},"action":"remove","lines":["s"],"id":347}],[{"start":{"row":32,"column":101},"end":{"row":32,"column":102},"action":"remove","lines":["s"],"id":379}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":6},"end":{"row":12,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1595492012259,"hash":"ec818a579707272bc2e63721c82e1468848b7501"}
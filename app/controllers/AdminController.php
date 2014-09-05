<?php

class AdminController extends BaseController {

    private $perpage = 10;

    public function index($type = "", $alias = "") {
        switch ($type) {
            case "baiviet":
                $currentpage = 1;
                if (Input::has('page')) {
                    $currentpage = Input::get('page');
                }
                if ($alias == "") {
                    $alias = -1;
                }
                $threads = TinTuc::Select($alias, $this->perpage, null);
                return View::make('admin.threads.index')
                                ->with("threads", $threads)
                                ->with('currentpage', $currentpage)
                                ->with('perpage', $this->perpage)
                                ->with("type", $alias)
                                ->with("title", "Quản lý các bài viết");
            case "lienhe":
                $lienhe = LienHe::Select(null, $this->perpage);
                $currentpage = 1;
                if (Input::has('page')) {
                    $currentpage = Input::get('page');
                }
                return View::make('admin.contacts.index')
                                ->with("lienhe", $lienhe)
                                ->with('currentpage', $currentpage)
                                ->with('perpage', $this->perpage)
                                ->with("title", "Quản lý liên hệ");
            case "lienlac":
                $lienlac = Contact::Select(-1);
                return View::make('admin.lienlac.index')
                                ->with("lienlac", $lienlac)
                                ->with("title", "Quản lý liên lạc");
            case "login":
                return View::make('admin.login')
                                ->with("title", "Login");
            default:
                return View::make('admin.index')
                                ->with("title", "Trang chủ quản lý");
        }
    }

    public function searchBaiViet($key, $type) {
        $key = preg_replace('/\s\s+/', ' ', trim($key));
        if ($key != null || $key == "") {
            $currentpage = 1;
            if (Input::has('page')) {
                $currentpage = Input::get('page');
            }
            $threads = TinTuc::Select($type, $this->perpage, $key);
            return View::make('admin.threads.index')
                            ->with("threads", $threads)
                            ->with('currentpage', $currentpage)
                            ->with('perpage', $this->perpage)
                            ->with("key", $key)
                            ->with("type", $type)
                            ->with("title", "Quản lý các bài viết");
        } else {
            return $this->index("baiviet");
        }
    }

    public function searchLienHe($key) {
        $key = preg_replace('/\s\s+/', ' ', trim($key));
        if ($key != null || $key == "") {
            $currentpage = 1;
            if (Input::has('page')) {
                $currentpage = Input::get('page');
            }
            $lienhe = LienHe::Select(null, $this->perpage, $key);
            return View::make('admin.contacts.index')
                            ->with("lienhe", $lienhe)
                            ->with('currentpage', $currentpage)
                            ->with('perpage', $this->perpage)
                            ->with("key", $key)
                            ->with("title", "Quản lý các liên hệ");
        } else {
            return $this->index("baiviet");
        }
    }

    public function updateQLLH($id) {
        if (Request::ajax()) {
            $result = LienHe::UpdateTT($id);
            if($result)
            {
                return Response::json(array('html' => date("h:i A | d/m/Y",time())));
            }
            return Response::json(array('html' => ""));
        }
    }

}

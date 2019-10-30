<?php

namespace KopetPaginasi;

class Paginasi
{
    protected $total;
    protected $perpage;
    protected $current;
    protected $base;

    public function __construct($total, $perpage, $current, $base = '')
    {
        $this->total = $total;
        $this->perpage = $perpage;
        $this->current = $current;
        $this->base = $base;
        $this->pages = $this->totPage();
    }

    /**
     * total pages
     * 
     * @return int
     */
    public function totPage()
    {
        return ceil((int) $this->total / (int) $this->perpage);
    }

    public function view()
    {
        $first = (($this->pages > 1) ? 2 : 2);
        $pg = [];

        // dd
        if ($this->pages >= 2) {

            // pg
            $ap = (($this->current > $this->perpage) ? range(($this->current - $this->perpage), $this->current) : range($first, $this->perpage));
            $bp = (($this->current - $this->perpage) <= $this->perpage ? $ap : range(($this->current - $this->perpage), $this->current));
            $fp = (($this->pages <= $this->perpage) ? range($first, $this->pages) : $bp);

            foreach ($fp as $p) {
                if ($p !== $this->pages && $this->current <= $this->pages) {
                    $pg[] = [
                        'current' => (($this->current === $p) ? true : false),
                        'p' => $p
                    ];
                }
            }

            if ((int) $this->pages !== (int) $this->current) {
                if ((int) $this->current <= (int) $this->pages) {
                    $pg[] = [
                        'current' => false,
                        'p' => $this->pages,
                    ];
                }
            }
        }
        return $pg;
    }
}

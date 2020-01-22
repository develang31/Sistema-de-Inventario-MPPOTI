<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    Protected $fillable =['nombre_area','id_sede','sigla_area','url','icono'];
    Protected $primaryKey = 'id_area';

    public $timestamps = false;

  public function getHijos($padres, $line)
  {
   $children = [];
   foreach ($padres as $line1) {
    if($line['id_area'] == $line1['area_id']) {
     $children = array_merge($children, [array_merge($line1, ['submenu' => $this->getHijos($padres, $line1)])]);
     }
   }
   return $children;
  }

 public function getPadres()
 {
          return $this->orderby('area_id')
          ->orderby('orden')
          ->get()
          ->toArray();
 }

    public static function getMenu()
    {
        $menus = new Area();
        $padres = $menus->getPadres();
        $menuAll = [];
        foreach ($padres as $line) {
            if ($line['area_id'] != 0)
                break;
            $item = [array_merge($line,['submenu' => $menus->getHijos($padres, $line)])];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menuAll;
    }
  public function guardarOrden($menu)
    {
        $menus = json_decode($menu);
        foreach ($menus as $var => $value) {
            $this->where('id_area', $value->id_area)->update(['area_id' => 0, 'orden' => $var + 1]);
            if (!empty($value->children)) {
                foreach ($value->children as $key => $vchild) {
                    $update_id = $vchild->id_area;
                    $parent_id = $value->id_area;
                    $this->where('id_area', $update_id)->update(['area_id' => $parent_id, 'orden' => $key + 1]);

                    if (!empty($vchild->children)) {
                        foreach ($vchild->children as $key => $vchild1) {
                            $update_id = $vchild1->id_area;
                            $parent_id = $vchild->id_area;
                            $this->where('id_area', $update_id)->update(['area_id' => $parent_id, 'orden' => $key + 1]);

                            if (!empty($vchild1->children)) {
                                foreach ($vchild1->children as $key => $vchild2) {
                                    $update_id = $vchild2->id_area;
                                    $parent_id = $vchild1->id_area;
                                    $this->where('id_area', $update_id)->update(['area_id' => $parent_id, 'orden' => $key + 1]);

                                    if (!empty($vchild2->children)) {
                                        foreach ($vchild2->children as $key => $vchild3) {
                                            $update_id = $vchild3->id_area;
                                            $parent_id = $vchild2->id_area;
                                            $this->where('id_area', $update_id)->update(['area_id' => $parent_id, 'orden' => $key + 1]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

}

<?php

namespace App\Controller\Admin;

use App\Entity\Resa;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class ResaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Resa::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            // TextField::new('title'),
            // TextEditorField::new('description'),
            DateField::new('dateArrivee'),
            DateField::new('dateDepart'),
            IntegerField::new('nbreVoyageur'),
        ];
    }
   
}

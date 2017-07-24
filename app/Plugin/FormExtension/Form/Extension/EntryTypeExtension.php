<?php

namespace Plugin\FormExtension\Form\Extension;

use Eccube\Form\Type\Front\EntryType;
use Eccube\Form\Type\Master\JobType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class EntryTypeExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // 職業を必須項目に変更するサンプル
        $builder->remove('job');
        $builder->add(
            'job',
            JobType::class,
            [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return EntryType::class;
    }
}

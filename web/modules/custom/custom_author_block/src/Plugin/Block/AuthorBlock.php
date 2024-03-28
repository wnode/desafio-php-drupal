<?php

namespace Drupal\custom_author_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Fornece um bloco 'Author Block'.
 *
 * @Block(
 *   id = "custom_author_block",
 *   admin_label = @Translation("Author Block"),
 *   category = @Translation("Custom"),
 * )
 */
class AuthorBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    
    // Implementa a lógica para recuperar informações do autor da postagem.
    // Por exemplo:
    // $author_info = $this->getCurrentPostAuthorInfo();
    
    // Exemplo de implementação:
    $author_info = [
      'name' => 'Nome do Autor',
      'bio' => 'Biografia do Autor',
      'image' => 'Caminho da Imagem do Autor',
    ];

    // Constrói a renderização do bloco.
    $build['author_block'] = [
      '#theme' => 'custom_author_block',
      '#author_info' => $author_info,
    ];

    return $build;
  }

}
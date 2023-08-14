// Adicionar campos personalizados ao perfil do usuário
function adicionar_campos_personalizados_usuario($user) {
    ?>
    <h3>Informações adicionais</h3>
    <table class="form-table">
        <tr>
            <th><label for="cpf">CPF</label></th>
            <td><input type="text" name="cpf" id="cpf" value="<?php echo esc_attr(get_the_author_meta('cpf', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="inscricao">Inscrição</label></th>
            <td><input type="text" name="inscricao" id="inscricao" value="<?php echo esc_attr(get_the_author_meta('inscricao', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="curso_escolhido">Curso Escolhido</label></th>
            <td><input type="text" name="curso_escolhido" id="curso_escolhido" value="<?php echo esc_attr(get_the_author_meta('curso_escolhido', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="turno">Turno</label></th>
            <td><input type="text" name="turno" id="turno" value="<?php echo esc_attr(get_the_author_meta('turno', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="modelo_prova">Modelo da Prova</label></th>
            <td><input type="text" name="modelo_prova" id="modelo_prova" value="<?php echo esc_attr(get_the_author_meta('modelo_prova', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="gabarito_recebido">Gabarito Recebido</label></th>
            <td><input type="text" name="gabarito_recebido" id="gabarito_recebido" value="<?php echo esc_attr(get_the_author_meta('gabarito_recebido', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="gabarito_oficial">Gabarito Oficial</label></th>
            <td><input type="text" name="gabarito_oficial" id="gabarito_oficial" value="<?php echo esc_attr(get_the_author_meta('gabarito_oficial', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="acertos">Acertos</label></th>
            <td><input type="text" name="acertos" id="acertos" value="<?php echo esc_attr(get_the_author_meta('acertos', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="erros">Erros</label></th>
            <td><input type="text" name="erros" id="erros" value="<?php echo esc_attr(get_the_author_meta('erros', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="espelho_gabarito">Espelho do Gabarito</label></th>
            <td><input type="text" name="espelho_gabarito" id="espelho_gabarito" value="<?php echo esc_attr(get_the_author_meta('espelho_gabarito', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="proposta_redacao">Proposta de Redação</label></th>
            <td><input type="text" name="proposta_redacao" id="proposta_redacao" value="<?php echo esc_attr(get_the_author_meta('proposta_redacao', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="espelho_redacao">Espelho da Redação</label></th>
            <td><input type="text" name="espelho_redacao" id="espelho_redacao" value="<?php echo esc_attr(get_the_author_meta('espelho_redacao', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="nota_prova_objetiva">Nota da Prova Objetiva</label></th>
            <td><input type="text" name="nota_prova_objetiva" id="nota_prova_objetiva" value="<?php echo esc_attr(get_the_author_meta('nota_prova_objetiva', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="nota_redacao">Nota da Redação</label></th>
            <td><input type="text" name="nota_redacao" id="nota_redacao" value="<?php echo esc_attr(get_the_author_meta('nota_redacao', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="nota_final">Nota Final</label></th>
            <td><input type="text" name="nota_final" id="nota_final" value="<?php echo esc_attr(get_the_author_meta('nota_final', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="bolsa_concedida">Bolsa Concedida</label></th>
            <td><input type="text" name="bolsa_concedida" id="bolsa_concedida" value="<?php echo esc_attr(get_the_author_meta('bolsa_concedida', $user->ID)); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}
add_action('show_user_profile', 'adicionar_campos_personalizados_usuario');
add_action('edit_user_profile', 'adicionar_campos_personalizados_usuario');

// Salvar campos personalizados do perfil do usuário
function salvar_campos_personalizados_usuario($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }
    update_user_meta($user_id, 'cpf', sanitize_text_field($_POST['cpf']));
    update_user_meta($user_id, 'inscricao', sanitize_text_field($_POST['inscricao']));
    update_user_meta($user_id, 'curso_escolhido', sanitize_text_field($_POST['curso_escolhido']));
    update_user_meta($user_id, 'turno', sanitize_text_field($_POST['turno']));
    update_user_meta($user_id, 'modelo_prova', sanitize_text_field($_POST['modelo_prova']));
    update_user_meta($user_id, 'gabarito_recebido', sanitize_text_field($_POST['gabarito_recebido']));
    update_user_meta($user_id, 'gabarito_oficial', sanitize_text_field($_POST['gabarito_oficial']));
    update_user_meta($user_id, 'acertos', sanitize_text_field($_POST['acertos']));
    update_user_meta($user_id, 'erros', sanitize_text_field($_POST['erros']));
    update_user_meta($user_id, 'espelho_gabarito', sanitize_text_field($_POST['espelho_gabarito']));
    update_user_meta($user_id, 'proposta_redacao', sanitize_text_field($_POST['proposta_redacao']));
    update_user_meta($user_id, 'espelho_redacao', sanitize_text_field($_POST['espelho_redacao']));
    update_user_meta($user_id, 'nota_prova_objetiva', sanitize_text_field($_POST['nota_prova_objetiva']));
    update_user_meta($user_id, 'nota_redacao', sanitize_text_field($_POST['nota_redacao']));
    update_user_meta($user_id, 'nota_final', sanitize_text_field($_POST['nota_final']));
    update_user_meta($user_id, 'bolsa_concedida', sanitize_text_field($_POST['bolsa_concedida']));
}
add_action('personal_options_update', 'salvar_campos_personalizados_usuario');
add_action('edit_user_profile_update', 'salvar_campos_personalizados_usuario');

// Shortcodes para exibir os campos personalizados do usuário logado
function shortcode_cpf($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'cpf', true);
}
add_shortcode('cpf', 'shortcode_cpf');

function shortcode_inscricao($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'inscricao', true);
}
add_shortcode('inscricao', 'shortcode_inscricao');

function shortcode_curso_escolhido($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'curso_escolhido', true);
}
add_shortcode('curso_escolhido', 'shortcode_curso_escolhido');

function shortcode_turno($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'turno', true);
}
add_shortcode('turno', 'shortcode_turno');

function shortcode_modelo_prova($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'modelo_prova', true);
}
add_shortcode('modelo_prova', 'shortcode_modelo_prova');

function shortcode_gabarito_recebido($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'gabarito_recebido', true);
}
add_shortcode('gabarito_recebido', 'shortcode_gabarito_recebido');

function shortcode_gabarito_oficial($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'gabarito_oficial', true);
}
add_shortcode('gabarito_oficial', 'shortcode_gabarito_oficial');

function shortcode_acertos($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'acertos', true);
}
add_shortcode('acertos', 'shortcode_acertos');

function shortcode_erros($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'erros', true);
}
add_shortcode('erros', 'shortcode_erros');

function shortcode_espelho_gabarito($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'espelho_gabarito', true);
}
add_shortcode('espelho_gabarito', 'shortcode_espelho_gabarito');

function shortcode_proposta_redacao($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'proposta_redacao', true);
}
add_shortcode('proposta_redacao', 'shortcode_proposta_redacao');

function shortcode_espelho_redacao($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'espelho_redacao', true);
}
add_shortcode('espelho_redacao', 'shortcode_espelho_redacao');

function shortcode_nota_prova_objetiva($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'nota_prova_objetiva', true);
}
add_shortcode('nota_prova_objetiva', 'shortcode_nota_prova_objetiva');

function shortcode_nota_redacao($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'nota_redacao', true);
}
add_shortcode('nota_redacao', 'shortcode_nota_redacao');

function shortcode_nota_final($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'nota_final', true);
}
add_shortcode('nota_final', 'shortcode_nota_final');

function shortcode_bolsa_concedida($atts) {
    $user_id = get_current_user_id();
    return get_user_meta($user_id, 'bolsa_concedida', true);
}
add_shortcode('bolsa_concedida', 'shortcode_bolsa_concedida');

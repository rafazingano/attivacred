<form id="regForm" action="{{ route('send') }}">
    <h1>Simulação de Emprestimo</h1>
    <!-- One "tab" for each step in the form: -->

    <div class="tab">SOBRE VOCÊ

        <div data-field-name="lead-intended-credit" id="ember586" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--dirty ">
        <div data-field-name="lead-intended-credit" id="ember586" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--dirty form-group--dirty dirty">
        <label for="ember586-input" id="ember586-label" class="form-group__label">
        <span id="form-field__label-ember586-label">
        De quanto você precisa?
        </span>
        </label>
        <div class="input form-field__input ">
        <input value="" placeholder="R$ 0,00" id="valor" class="form-group__text-field input__field ember-view" insp-form-input-id="lead-intended-credit" name="perfil[]">
        </div>
        </div>
        </div>
        <div data-field-name="customer-full-name" id="ember653" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember653-input" id="ember653-label" class="form-group__label">
        <span id="form-field__label-ember653-label">
        Qual seu nome completo?
        </span>
        </label>
        <div class="input form-field__input ">
        <input value="" placeholder="Ex: João da Silva Gonçalves" id="nome" class="form-group__text-field input__field ember-view" insp-form-input-id="customer-full-name" name="nome">
        </div>
        </div>
        </div>
        <div data-field-name="customer-birth-date" id="ember662" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember662-input" id="ember662-label" class="form-group__label">
        <span id="form-field__label-ember662-label">
        Quando você nasceu?
        </span>
        </label>
        <div class="input form-field__input ">
        <input placeholder="Ex: 01/02/1990" id="ember662-input" class="form-group__text-field input__field ember-view" insp-form-input-id="customer-birth-date" name="perfil[]">
        </div>
        </div>
        </div>
        <div data-field-name="customer-phone" id="ember670" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember670-input" id="ember670-label" class="form-group__label">
        <span id="form-field__label-ember670-label">
        Qual seu contato de celular?
        </span>
        </label>
        <div class="input form-field__input ">
        <input type="tel" placeholder="Ex: 11 91111 2222" id="ember670-input" class="form-group__text-field inspectletIgnore input__field ember-view" insp-form-input-id="customer-phone" name="perfil[]">
        </div>
        </div>
        </div>
        </div>
        </div>

    </div>

    <div class="tab">PERFIL DE CRÉDITO

        <div data-field-name="customer-cpf" id="ember708" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember708-input" id="ember708-label" class="form-group__label">
        <span id="form-field__label-ember708-label">
        Qual seu CPF?
        </span>
        </label>
        <div class="input form-field__input ">
        <input inputmode="tel" type="text" placeholder="Ex: 111.222.333-44" id="ember708-input" class="form-group__text-field input__field ember-view" insp-form-input-id="customer-cpf" name="customer-cpf">
        </div>
        </div>
        </div>
        <div data-field-name="lead-family-monthly-income" id="ember715" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember715-input" id="ember715-label" class="form-group__label">
        <span id="form-field__label-ember715-label">
        Qual a renda mensal da sua família?
        </span>
        </label>
        <div class="input form-field__input ">
        <input inputmode="tel" placeholder="Ex: R$ 3.000,00" id="ember715-input" class="form-group__text-field input__field ember-view" insp-form-input-id="lead-family-monthly-income" name="lead-family-monthly-income">
        </div>
        </div>
        </div>
        <div data-field-name="lead-professional-status" id="ember720" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember720-input" id="ember720-label" class="form-group__label">
        <span id="form-field__label-ember720-label">
        Qual seu tipo de atividade profissional?
        </span>
        </label>
        <div class="input form-field__input ">
        <div id="ember720-input" class="radio-input input__field ember-view" insp-form-input-id="lead-professional-status" name="lead-professional-status">    <div class="radio-input__item">
        <input type="radio" name="lead-professional-status" id="lead-professional-status-clt" value="clt">
        <label for="lead-professional-status-clt" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Assalariado
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-professional-status" id="lead-professional-status-self_employed" value="self_employed">
        <label for="lead-professional-status-self_employed" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Autônomo
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-professional-status" id="lead-professional-status-freelancer" value="freelancer">
        <label for="lead-professional-status-freelancer" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Profissional Liberal
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-professional-status" id="lead-professional-status-businessman" value="businessman">
        <label for="lead-professional-status-businessman" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Empresário
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-professional-status" id="lead-professional-status-civil_servant" value="civil_servant">
        <label for="lead-professional-status-civil_servant" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Funcionário Público
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-professional-status" id="lead-professional-status-retired" value="retired">
        <label for="lead-professional-status-retired" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Aposentado
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-professional-status" id="lead-professional-status-other" value="other">
        <label for="lead-professional-status-other" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Outro
        </div>
        </label>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div data-field-name="lead-purpose" id="ember738" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember738-input" id="ember738-label" class="form-group__label">
        <span id="form-field__label-ember738-label">
        Como esse empréstimo vai te ajudar?
        </span>
        </label>
        <div class="input form-field__input ">
        <div id="ember738-input" class="radio-input input__field ember-view" insp-form-input-id="lead-purpose" name="lead-purpose">
        <div class="radio-input__item">
        <input type="radio" name="lead-purpose" id="lead-purpose-debts_payment" value="debts_payment">
        <label for="lead-purpose-debts_payment" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Pagamento de dívidas
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-purpose" id="lead-purpose-investment_in_own_business" value="investment_in_own_business">
        <label for="lead-purpose-investment_in_own_business" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Investimento
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-purpose" id="lead-purpose-real_estate_renovation" value="real_estate_renovation">
        <label for="lead-purpose-real_estate_renovation" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Reforma de casa
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-purpose" id="lead-purpose-goods_acquisition" value="goods_acquisition">
        <label for="lead-purpose-goods_acquisition" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Aquisição de Bens
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-purpose" id="lead-purpose-debts_refinancing" value="debts_refinancing">
        <label for="lead-purpose-debts_refinancing" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Refinanciamento de dívidas
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-purpose" id="lead-purpose-others" value="others">
        <label for="lead-purpose-others" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Outros
        </div>
        </label>
        </div>
        </div>
        </div>
        </div>
        </div>

    </div>

    @if($type == 'property')
    <div class="tab">SOBRE O IMÓVEL

        <div data-field-name="lead-real-estate-zip-code" id="ember772" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember772-input" id="ember772-label" class="form-group__label">
        <span id="form-field__label-ember772-label">
        Qual CEP do seu imóvel?
        </span>
        </label>
        <div class="input form-field__input ">
        <input type="tel" placeholder="00000-000" id="ember772-input" class="form-group__text-field input__field ember-view" insp-form-input-id="lead-real-estate-zip-code" name="lead-real-estate-zip-code">
        <small>
        <a href="http://www.buscacep.correios.com.br/sistemas/buscacep" target="_blank">
        Não sei meu CEP
        </a>
        </small>
        </div>
        </div>
        </div>
        <div id="ember782" class="ember-view"><p data-testid="addressForZipCode" class="text--green"></p></div>
        <div class="form-group">
        <div data-field-name="lead-real-estate-number" id="ember784" class="ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember784-input" id="ember784-label" class="form-group__label">
        <span id="form-field__label-ember784-label">
        Qual o número do seu imóvel?
        </span>
        </label>
        <div class="input form-field__input ">
        <input placeholder="000" id="ember784-input" class="form-group__text-field input__field ember-view" insp-form-input-id="lead-real-estate-number" name="lead-real-estate-number">
        </div>
        </div>
        </div>
        <span id="ember788" class="real-estate-no-number-checkbox app-checkbox input__field ember-view"><input type="checkbox">
        <label for="ember788-input">
        <span class="app-checkbox__check "></span>
        Imóvel sem número
        </label>
        </span>
        </div>
        <div data-field-name="lead-real-estate-type" id="ember790" class="form-group ember-view"><div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember790-input" id="ember790-label" class="form-group__label">
        <span id="form-field__label-ember790-label">
        Qual o tipo do imóvel?
        </span>
        </label>
        <div class="input form-field__input ">
        <div id="ember790-input" class="radio-input input__field radio-input--horizontal-with-icons ember-view" insp-form-input-id="lead-real-estate-type" name="lead-real-estate-type">    <div class="radio-input__item">
        <input type="radio" name="lead-real-estate-type" id="lead-real-estate-type-house" value="house">
        <label for="lead-real-estate-type-house" class="radio-input__label">
        <svg name="house" id="ember793" class="radio-input__icon icon-svg icon-house ember-view"><use xlink:href="/assets/svgs-69babcf3e599e12235783362375f7da6.svg#house"></use>
        </svg>
        <div>
        <span class="radio-input__button"></span>
        Casa Residencial
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-real-estate-type" id="lead-real-estate-type-apartment" value="apartment">
        <label for="lead-real-estate-type-apartment" class="radio-input__label">
        <svg name="apartment" id="ember795" class="radio-input__icon icon-svg icon-apartment ember-view">
        <use xlink:href="/assets/svgs-69babcf3e599e12235783362375f7da6.svg#apartment"></use>
        </svg>
        <div>
        <span class="radio-input__button"></span>
        Apartamento Residencial
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-real-estate-type" id="lead-real-estate-type-commercial" value="commercial">
        <label for="lead-real-estate-type-commercial" class="radio-input__label">
        <svg name="commercial" id="ember797" class="radio-input__icon icon-svg icon-commercial ember-view">
        <use xlink:href="/assets/svgs-69babcf3e599e12235783362375f7da6.svg#commercial"></use>
        </svg>
        <div>
        <span class="radio-input__button"></span>
        Comercial
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-real-estate-type" id="lead-real-estate-type-land" value="land">
        <label for="lead-real-estate-type-land" class="radio-input__label">
        <svg name="land" id="ember799" class="radio-input__icon icon-svg icon-land ember-view">
        <use xlink:href="/assets/svgs-69babcf3e599e12235783362375f7da6.svg#land"></use>
        </svg>
        <div>
        <span class="radio-input__button"></span>
        Terreno
        </div>
        </label>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div data-field-name="lead-real-estate-value" id="ember801" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember801-input" id="ember801-label" class="form-group__label">
        <span id="form-field__label-ember801-label">
        Qual o valor estimado do imóvel?
        </span>
        </label>
        <div class="input form-field__input ">
        <input inputmode="tel" placeholder="R$ 0,00" id="ember801-input" class="form-group__text-field input__field ember-view" insp-form-input-id="lead-real-estate-value" name="lead-real-estate-value">
        </div>
        </div>
        </div>
        <div id="ember805" class="form-group ember-view">
        </div>
        <div data-field-name="lead-real-estate-has-debts" id="ember806" class="form-group ember-view">
        <div data-error="false" class="form-field  ">
        <label for="ember806-input" id="ember806-label" class="form-group__label">
        <span id="form-field__label-ember806-label">
        Este imóvel está quitado?
        </span>
        </label>
        <div class="input form-field__input ">
        <div id="ember806-input" class="ember-view"><div class="conditional-fields">
        <div id="ember812" class="radio-input input__field radio-input--horizontal-with-buttons ember-view">    <div class="radio-input__item">
        <input type="radio" name="lead-real-estate-has-debts" id="lead-real-estate-has-debts-false" value="false">
        <label for="lead-real-estate-has-debts-false" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Sim
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-real-estate-has-debts" id="lead-real-estate-has-debts-true" value="true">
        <label for="lead-real-estate-has-debts-true" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Não
        </div>
        </label>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div data-field-name="lead-has-deed" id="ember816" class="form-group ember-view">
        <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember816-input" id="ember816-label" class="form-group__label">
        <span id="form-field__label-ember816-label">
        Você tem a matrícula do imóvel?
        </span>
        </label>
        <div class="input form-field__input ">
        <div id="ember816-input" class="radio-input input__field radio-input--horizontal-with-buttons ember-view" insp-form-input-id="lead-has-deed" name="lead-has-deed">    <div class="radio-input__item">
        <input type="radio" name="lead-has-deed" id="lead-has-deed-yes" value="yes">
        <label for="lead-has-deed-yes" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Sim
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-has-deed" id="lead-has-deed-no" value="no">
        <label for="lead-has-deed-no" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Não
        </div>
        </label>
        </div>
        <div class="radio-input__item">
        <input type="radio" name="lead-has-deed" id="lead-has-deed-do_not_know" value="do_not_know">
        <label for="lead-has-deed-do_not_know" class="radio-input__label">
        <div>
        <span class="radio-input__button"></span>
        Não sei
        </div>
        </label>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div id="ember823" class="form-help-component content-out ember-view"><p class="form-help-prompt" data-ember-action="" data-ember-action-824="824">
        O que é matrícula?
        </p>
        <div class="form-help-content">
        <p>
        A certidão de matrícula é o documento que mostra quem é o proprietário
        e o histórico de alterações do imóvel.
        </p>
        <p>
        <strong>Onde fica?</strong> No cartório de Registro de Imóveis (RGI).
        </p>
        <p>
        <strong>É provável que você tenha a matrícula se:</strong><br>
        - Você financiou seu imóvel<br>
        - Seu imóvel é um apartamento<br>
        - Você foi em um cartório registrar o imóvel
        </p>
        <p>
        <strong>Não confunda este documento com:</strong><br>
        - IPTU<br>
        - Escritura<br>
        - Contrato de compra e venda
        </p>
        </div>
        </div>

    </div>
    @endif

    @if($type == 'vehicle')
    <div class="tab">SOBRE SEU VEICULO

        <div id="ember759" class="ember-view"><div class="auto-data__specification-fields">
        <div data-field-name="lead-auto-manufacturing-year" id="ember761" class="form-group ember-view"><div data-error="false" class="form-field form-field--dirty form-group--dirty dirty">
        <label for="ember761-input" id="ember761-label" class="form-group__label">
        <span id="form-field__label-ember761-label">
        Qual é o ano fabricação do veículo?
        </span>
        </label>
        <div class="input form-field__input ">
        <select id="ember761-input" class="form-group__text-field select input__field ember-view" insp-form-input-id="lead-auto-manufacturing-year" name="lead-auto-manufacturing-year">  <option>
        Selecione um item
        </option>
        <option value="2019">
        2019
        </option>
        <option value="2018">
        2018
        </option>
        <option value="2017">
        2017
        </option>
        <option value="2016">
        2016
        </option>
        <option value="2015">
        2015
        </option>
        <option value="2014">
        2014
        </option>
        <option value="2013">
        2013
        </option>
        <option value="2012">
        2012
        </option>
        <option value="2011">
        2011
        </option>
        <option value="2010">
        2010
        </option>
        <option value="2009">
        2009
        </option>
        <option value="2008">
        2008
        </option>
        <option value="2007">
        2007
        </option>
        <option value="2006">
        2006
        </option>
        <option value="2005">
        2005
        </option>
        <option value="2004">
        2004
        </option>
        <option value="2003">
        2003
        </option>
        <option value="2002">
        2002
        </option>
        <option value="2001">
        2001
        </option>
        <option value="2000">
        2000
        </option>
        <option value="1999">
        1999
        </option>
        <option value="1998">
        1998
        </option>
        <option value="1997">
        1997
        </option>
        <option value="1996">
        1996
        </option>
        <option value="1995">
        1995
        </option>
        <option value="1994">
        1994
        </option>
        <option value="1993">
        1993
        </option>
        <option value="1992">
        1992
        </option>
        <option value="1991">
        1991
        </option>
        </select>
        </div>
        </div>
        </div>
        <div data-field-name="lead-auto-year" id="ember794" class="form-group ember-view"><div data-error="false" class="form-field form-field--dirty form-group--dirty dirty">
        <label for="ember794-input" id="ember794-label" class="form-group__label">
        <span id="form-field__label-ember794-label">
        Qual é o ano modelo do veículo?
        </span>
        </label>
        <div class="input form-field__input ">
        <select id="ember794-input" class="form-group__text-field select input__field ember-view" insp-form-input-id="lead-auto-year" name="lead-auto-year">  <option>
        Selecione um item
        </option>
        <option value="2001">
        2001
        </option>
        <option value="2002">
        2002
        </option>
        </select>
        </div>
        </div>
        </div>
        <div data-field-name="lead-auto-brand" id="ember861" class="form-group ember-view">
            <div data-error="false" class="form-field form-field--pristine form-group--pristine pristine">
        <label for="ember861-input" id="ember861-label" class="form-group__label">
        <span id="form-field__label-ember861-label">
        Qual é a marca do veículo?
        </span>
        </label>
        <div class="input form-field__input ">
        <select id="ember861-input" class="form-group__text-field select input__field ember-view" insp-form-input-id="lead-auto-brand" name="lead-auto-brand">  <option>
        Selecione uma opção
        </option>
        <option value="CHEVROLET">
        CHEVROLET
        </option>
        <option value="CITROEN">
        CITROEN
        </option>
        <option value="FIAT">
        FIAT
        </option>
        <option value="FORD">
        FORD
        </option>
        <option value="HONDA">
        HONDA
        </option>
        <option value="HYUNDAI">
        HYUNDAI
        </option>
        <option value="PEUGEOT">
        PEUGEOT
        </option>
        <option value="RENAULT">
        RENAULT
        </option>
        <option value="TOYOTA">
        TOYOTA
        </option>
        <option value="VOLKSWAGEN">
        VOLKSWAGEN
        </option>
        <option disabled="">
        ---
        </option>
        <option value="ALFA ROMEO">
        ALFA ROMEO
        </option>
        <option value="AUDI">
        AUDI
        </option>
        <option value="BMW">
        BMW
        </option>
        <option value="BRM">
        BRM
        </option>
        <option value="CADILLAC">
        CADILLAC
        </option>
        <option value="CHEVROLET">
        CHEVROLET
        </option>
        <option value="CHRYSLER">
        CHRYSLER
        </option>
        <option value="CITROEN">
        CITROEN
        </option>
        <option value="DODGE">
        DODGE
        </option>
        <option value="FERRARI">
        FERRARI
        </option>
        <option value="FIAT">
        FIAT
        </option>
        <option value="FORD">
        FORD
        </option>
        <option value="GMC">
        GMC
        </option>
        <option value="HONDA">
        HONDA
        </option>
        <option value="HYUNDAI">
        HYUNDAI
        </option>
        <option value="IVECO">
        IVECO
        </option>
        <option value="JAGUAR">
        JAGUAR
        </option>
        <option value="JEEP">
        JEEP
        </option>
        <option value="KIA">
        KIA
        </option>
        <option value="LAND ROVER">
        LAND ROVER
        </option>
        <option value="MERCEDES-BENZ">
        MERCEDES-BENZ
        </option>
        <option value="MITSUBISHI">
        MITSUBISHI
        </option>
        <option value="NISSAN">
        NISSAN
        </option>
        <option value="PEUGEOT">
        PEUGEOT
        </option>
        <option value="PORSCHE">
        PORSCHE
        </option>
        <option value="RENAULT">
        RENAULT
        </option>
        <option value="SEAT">
        SEAT
        </option>
        <option value="SELVAGEM">
        SELVAGEM
        </option>
        <option value="SUBARU">
        SUBARU
        </option>
        <option value="SUZUKI">
        SUZUKI
        </option>
        <option value="TOYOTA">
        TOYOTA
        </option>
        <option value="TROLLER">
        TROLLER
        </option>
        <option value="VOLKSWAGEN">
        VOLKSWAGEN
        </option>
        <option value="VOLVO">
        VOLVO
        </option>
        </select>
        </div>
        </div>
        </div>
        </div>
        </div>

    </div>
    @endif

    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Proximo</button>
      </div>
    </div>

    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form>



@push('scripts')
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
        } else {
        document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Enviar";
        } else {
        document.getElementById("nextBtn").innerHTML = "Proximo";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>
@endpush

@push('styles')
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }
/*
    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }
*/
    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style>

@endpush


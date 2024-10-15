<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/nova/templates/layout/views/views-view-unformatted--event_tab.html.twig */
class __TwigTemplate_be5b36485c4e2c7f1d88f593fd3f840d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "<div class=\"content-wrapper\">
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            yield "  <div class=\"card-wrapper\">
    <div class=\"card-header\">
      ";
            // line 22
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 22), "field_event_highlight", [], "any", false, false, true, 22)) > 0)) {
                // line 23
                yield "      <div class=\"card-highlight\"></div>
      ";
            }
            // line 25
            yield "      <div class=\"card-cost\">
        ";
            // line 26
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 26), "field_event_cost", [], "any", false, false, true, 26)) > 0)) {
                // line 27
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 27), "field_event_cost", [], "any", false, false, true, 27)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                yield "
        ";
            }
            // line 29
            yield "      </div>
      ";
            // line 30
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 30)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 30), "field_event_image", [], "any", false, false, true, 30), "entity", [], "any", false, false, true, 30) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 30)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 30), "field_event_image", [], "any", false, false, true, 30), "entity", [], "any", false, false, true, 30), "uri", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30))) {
                // line 31
                yield "      ";
                $context["image"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 31), "field_event_image", [], "any", false, false, true, 31), "entity", [], "any", false, false, true, 31);
                // line 32
                yield "        <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "uri", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                yield "\" />
      ";
            } else {
                // line 34
                yield "        <div class=\"no-image\">
            ";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Conference Slide Image"));
                yield "
        </div>
      ";
            }
            // line 38
            yield "
    </div>
    <div class=\"card-info-wrapper\">
      <div class=\"card-content\">
        <div class=\"card-title\">";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 42)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 42), "field_event_title", [], "any", false, false, true, 42)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "value", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            yield "</div>
        <ul>
          <li class=\"card-tag\">
            ";
            // line 45
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 45), "field_event_tags", [], "any", false, false, true, 45)) > 0)) {
                // line 46
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 46)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 46), "field_event_tags", [], "any", false, false, true, 46)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "value", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                yield "
            ";
            }
            // line 48
            yield "          </li>
          <li class=\"card-date\">
            ";
            // line 50
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 50)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 50), "field_event_date", [], "any", false, false, true, 50)) > 0)) {
                // line 51
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 51), "field_event_date", [], "any", false, false, true, 51)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null), "value", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                yield "
            ";
            }
            // line 53
            yield "          </li>
          <li class=\"card-location\">
            ";
            // line 55
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 55)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 55), "field_event_location", [], "any", false, false, true, 55)) > 0)) {
                // line 56
                yield "              ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 56), "field_event_location", [], "any", false, false, true, 56)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null), "value", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                yield "
            ";
            }
            // line 58
            yield "          </li>
        </ul>
      </div>
      <div class=\"card-action\">
        <div class=\"card-icon card-fav\">
          <svg width=\"23\" height=\"21\" viewBox=\"0 0 23 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M22.9863 7.10065C22.9885 6.89995 22.9754 6.69941 22.9473 6.50067C22.9473 6.48967 22.9473 6.48168 22.9473 6.47168C22.9478 6.46436 22.9478 6.45703 22.9473 6.44971C22.8013 4.7322 22.0653 3.11812 20.8643 1.88165C20.2793 1.28988 19.5825 0.820205 18.8145 0.49988C18.0465 0.179555 17.2225 0.0149963 16.3903 0.0156882C15.4502 0.0176144 14.5216 0.221901 13.6675 0.614626C12.8134 1.00735 12.0537 1.57931 11.4403 2.29169C10.879 1.61584 10.1826 1.06487 9.39576 0.674135C8.6089 0.283401 7.74902 0.0615339 6.87134 0.0228293C5.99366 -0.0158752 5.11758 0.12939 4.29938 0.449343C3.48118 0.769296 2.73891 1.25686 2.1203 1.88068C0.918758 3.11654 0.183268 4.73102 0.0393111 6.44867C0.0382777 6.45429 0.0382777 6.46008 0.0393111 6.4657C0.0393111 6.4767 0.0393111 6.48767 0.0393111 6.50067C0.0108148 6.69936 -0.00222583 6.89994 0.000309598 7.10065C0.00684883 7.72089 0.0867744 8.33823 0.238347 8.9397C0.743139 10.9687 1.86044 12.7929 3.43836 14.1647L10.9303 20.8057C11.0688 20.9266 11.2464 20.9933 11.4303 20.9933C11.6142 20.9933 11.7918 20.9266 11.9303 20.8057L19.5523 14.1657C21.1302 12.7939 22.2475 10.9696 22.7523 8.94068C22.9028 8.33876 22.9814 7.72108 22.9863 7.10065ZM21.2983 8.60767C20.8631 10.3491 19.9014 11.9139 18.5443 13.0887H18.5504L11.4263 19.2887L4.42633 13.0887C3.0697 11.9141 2.10836 10.3497 1.67334 8.60871C1.54763 8.11633 1.48049 7.61079 1.47333 7.10266C1.47108 6.96084 1.48008 6.81905 1.50031 6.67865L1.50635 6.62866C1.6112 5.22681 2.20262 3.90568 3.17835 2.89368C3.62257 2.44103 4.15282 2.08176 4.73792 1.83704C5.32301 1.59232 5.95112 1.46711 6.58533 1.46869C7.437 1.46873 8.2736 1.69314 9.01093 2.11939C9.74826 2.54563 10.3603 3.15865 10.7853 3.89667C10.8523 4.00615 10.9461 4.09671 11.0579 4.15973C11.1697 4.22275 11.2958 4.25611 11.4241 4.25672C11.5525 4.25732 11.6789 4.22512 11.7913 4.16315C11.9037 4.10118 11.9984 4.0115 12.0663 3.90265C12.5174 3.16088 13.1515 2.5475 13.9078 2.12128C14.6641 1.69506 15.5172 1.47034 16.3853 1.46869C17.0198 1.46729 17.6482 1.59283 18.2335 1.83789C18.8188 2.08296 19.3491 2.44261 19.7933 2.89569C20.77 3.90607 21.361 5.22716 21.4633 6.62866L21.4713 6.67865C21.4915 6.81838 21.5006 6.95949 21.4984 7.10065C21.4912 7.6091 21.4241 8.11495 21.2983 8.60767Z\" fill=\"#CED0D4\"/>
          </svg>
        </div>
        <div class=\"card-icon card-download\">
          <svg width=\"28\" height=\"21\" viewBox=\"0 0 28 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M16.1827 20.4928H6.66266C5.10853 20.3573 3.66214 19.6424 2.61066 18.49C1.55919 17.3375 0.979486 15.8319 0.986638 14.2718C0.989433 13.3382 1.21217 12.4183 1.63678 11.5868C2.0614 10.7553 2.67598 10.0355 3.43067 9.48582C3.28959 8.79437 3.32109 8.07882 3.5224 7.40245C3.72372 6.72608 4.08862 6.10978 4.58484 5.60802C5.08107 5.10625 5.69334 4.73449 6.36744 4.52568C7.04153 4.31687 7.75668 4.27742 8.44965 4.41081C9.25791 3.0219 10.4736 1.91509 11.9321 1.24034C13.3905 0.56559 15.0212 0.355576 16.603 0.638716C18.1849 0.921856 19.6414 1.68447 20.7752 2.82323C21.909 3.96198 22.6654 5.42182 22.9417 7.00487C24.4945 7.43639 25.8466 8.3993 26.7622 9.72569C27.6778 11.0521 28.0987 12.6578 27.9515 14.2627C27.8044 15.8677 27.0986 17.3701 25.9572 18.5079C24.8157 19.6458 23.3111 20.3468 21.7056 20.4888L16.1827 20.4928ZM7.64063 5.87285C6.92024 5.87129 6.22856 6.15495 5.71668 6.66185C5.45584 6.91798 5.24797 7.22302 5.10505 7.55949C4.96212 7.89597 4.88692 8.25729 4.88367 8.62285C4.88305 8.94083 4.93889 9.25641 5.04865 9.55485L5.27362 10.1608L4.71265 10.4848C4.04993 10.8714 3.49982 11.4246 3.11689 12.0894C2.73395 12.7542 2.53153 13.5076 2.52967 14.2748C2.51985 15.4401 2.94642 16.567 3.72553 17.4336C4.50464 18.3003 5.57984 18.844 6.73963 18.9578H21.6397C22.9146 18.8261 24.0997 18.2407 24.9791 17.3081C25.8584 16.3756 26.3734 15.1581 26.4301 13.8777C26.4868 12.5972 26.0816 11.339 25.2882 10.3324C24.4947 9.32576 23.366 8.63779 22.1077 8.39384L21.5436 8.29387L21.4836 7.72581C21.3734 6.65288 20.9901 5.62613 20.3704 4.74333C19.7507 3.86053 18.9153 3.15115 17.9437 2.68284C17.1973 2.32276 16.3871 2.11395 15.5596 2.0684C14.7322 2.02285 13.9039 2.14148 13.1226 2.41746C12.3412 2.69344 11.6222 3.12126 11.0069 3.67637C10.3916 4.23148 9.89231 4.90288 9.53766 5.65184L9.23768 6.28483L8.57868 6.04484C8.29011 5.93966 7.98577 5.88421 7.67865 5.88084H7.64466L7.64063 5.87285ZM18.4476 12.9238L14.9376 17.7638C14.8863 17.8365 14.8183 17.8957 14.7393 17.9366C14.6603 17.9775 14.5726 17.9989 14.4836 17.9989C14.3947 17.9989 14.307 17.9775 14.228 17.9366C14.149 17.8957 14.081 17.8365 14.0297 17.7638L10.5197 12.9278C10.4505 12.8302 10.4134 12.7135 10.4136 12.5939C10.4147 12.4455 10.4746 12.3036 10.5801 12.1994C10.6857 12.0951 10.8283 12.037 10.9766 12.0378H12.7767V6.53782H16.1827V12.0378H17.9887C18.1084 12.0361 18.2254 12.0737 18.3217 12.1448C18.441 12.2319 18.5212 12.3626 18.5447 12.5085C18.5683 12.6543 18.5334 12.8035 18.4476 12.9238Z\" fill=\"#CED0D4\"/>
          </svg>

        </div>
        <div class=\"card-icon card-share\">
          <svg width=\"23\" height=\"23\" viewBox=\"0 0 23 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.9341 14.715C17.3994 14.7146 16.87 14.8218 16.3776 15.0304C15.8852 15.239 15.4398 15.5446 15.0681 15.929C14.9444 16.0549 14.8289 16.1885 14.7222 16.3291L8.90717 12.718C9.15251 11.9174 9.15251 11.0617 8.90717 10.2611L14.7231 6.67806C15.0944 7.18056 15.5783 7.58908 16.1359 7.87093C16.6935 8.15277 17.3094 8.30009 17.9341 8.30104C18.7584 8.31992 19.5695 8.09278 20.264 7.64858C20.9586 7.20437 21.505 6.56323 21.8336 5.80708C22.1621 5.05094 22.2578 4.21403 22.1086 3.40321C21.9593 2.5924 21.5719 1.84445 20.9957 1.25484C20.4194 0.665228 19.6805 0.260702 18.8734 0.092912C18.0662 -0.0748781 17.2273 0.00170118 16.4638 0.312822C15.7003 0.623942 15.0469 1.1555 14.5869 1.83968C14.1268 2.52385 13.8812 3.32957 13.8812 4.15401C13.881 4.5524 13.9379 4.94876 14.0501 5.33101L8.21912 8.92403C7.84596 8.43355 7.36478 8.03567 6.81293 7.76131C6.26108 7.48694 5.6534 7.3435 5.03711 7.34206C3.95303 7.36587 2.92137 7.81321 2.16309 8.58833C1.4048 9.36345 0.980225 10.4047 0.980225 11.489C0.980225 12.5734 1.4048 13.6146 2.16309 14.3897C2.92137 15.1648 3.95303 15.6123 5.03711 15.6361C5.65319 15.6348 6.26068 15.4915 6.81238 15.2173C7.36407 14.9431 7.84514 14.5453 8.21814 14.055L14.0501 17.676C13.8415 18.3903 13.8258 19.1471 14.0046 19.8693C14.1834 20.5916 14.5503 21.2536 15.0681 21.788C15.4399 22.1723 15.8852 22.4779 16.3774 22.6866C16.8697 22.8953 17.399 23.0028 17.9337 23.0028C18.4683 23.0028 18.9975 22.8953 19.4898 22.6866C19.9821 22.4779 20.4274 22.1723 20.7991 21.788C21.5611 21.0022 21.9872 19.9506 21.9872 18.856C21.9872 17.7615 21.5611 16.7099 20.7991 15.924C20.4271 15.5406 19.9818 15.2359 19.4896 15.0282C18.9974 14.8205 18.4684 14.714 17.9341 14.715Z\" fill=\"#CED0D4\"/>
          </svg>
        </div>
        <div class=\"card-detail\">View Details</div>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/nova/templates/layout/views/views-view-unformatted--event_tab.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  171 => 83,  141 => 58,  135 => 56,  133 => 55,  129 => 53,  123 => 51,  121 => 50,  117 => 48,  111 => 46,  109 => 45,  103 => 42,  97 => 38,  91 => 35,  88 => 34,  80 => 32,  77 => 31,  75 => 30,  72 => 29,  66 => 27,  64 => 26,  61 => 25,  57 => 23,  55 => 22,  51 => 20,  47 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/nova/templates/layout/views/views-view-unformatted--event_tab.html.twig", "/var/www/html/web/themes/custom/nova/templates/layout/views/views-view-unformatted--event_tab.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 19, "if" => 22, "set" => 31);
        static $filters = array("length" => 22, "escape" => 27, "t" => 35);
        static $functions = array("file_url" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['length', 'escape', 't'],
                ['file_url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

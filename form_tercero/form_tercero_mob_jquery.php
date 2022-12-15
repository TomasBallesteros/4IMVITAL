
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["te_tidentificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_nombres" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_apellidos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_departamento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_municipio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_gsangre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_rhsangre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_eps" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_regimen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_fnacimiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_nombre_contacto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_telefono_contacto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_departamento_contacto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_municipio_contacto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_direccion_contacto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_parentesco_contacto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_foto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_antecedentes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["te_autoriza" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["te_tidentificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_tidentificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_identificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_nombres" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_nombres" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_apellidos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_apellidos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_departamento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_departamento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_municipio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_municipio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_gsangre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_gsangre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_rhsangre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_rhsangre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_eps" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_eps" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_regimen" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_regimen" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_fnacimiento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_fnacimiento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_nombre_contacto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_nombre_contacto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_telefono_contacto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_telefono_contacto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_departamento_contacto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_departamento_contacto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_municipio_contacto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_municipio_contacto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_direccion_contacto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_direccion_contacto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_parentesco_contacto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_parentesco_contacto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_antecedentes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_antecedentes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["te_autoriza" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["te_autoriza" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("te_tidentificacion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_departamento" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_municipio" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_gsangre" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_rhsangre" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_eps" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_regimen" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_departamento_contacto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_municipio_contacto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_parentesco_contacto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("te_antecedentes" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_te_tidentificacion' + iSeqRow).bind('blur', function() { sc_form_tercero_te_tidentificacion_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_tercero_te_tidentificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_identificacion' + iSeqRow).bind('blur', function() { sc_form_tercero_te_identificacion_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_tercero_te_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_nombres' + iSeqRow).bind('blur', function() { sc_form_tercero_te_nombres_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tercero_te_nombres_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_apellidos' + iSeqRow).bind('blur', function() { sc_form_tercero_te_apellidos_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tercero_te_apellidos_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_direccion' + iSeqRow).bind('blur', function() { sc_form_tercero_te_direccion_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tercero_te_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_telefono' + iSeqRow).bind('blur', function() { sc_form_tercero_te_telefono_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tercero_te_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_municipio' + iSeqRow).bind('blur', function() { sc_form_tercero_te_municipio_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tercero_te_municipio_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_departamento' + iSeqRow).bind('blur', function() { sc_form_tercero_te_departamento_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_tercero_te_departamento_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_tercero_te_departamento_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_gsangre' + iSeqRow).bind('blur', function() { sc_form_tercero_te_gsangre_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tercero_te_gsangre_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_rhsangre' + iSeqRow).bind('blur', function() { sc_form_tercero_te_rhsangre_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tercero_te_rhsangre_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_fnacimiento' + iSeqRow).bind('blur', function() { sc_form_tercero_te_fnacimiento_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_tercero_te_fnacimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_regimen' + iSeqRow).bind('blur', function() { sc_form_tercero_te_regimen_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_tercero_te_regimen_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_eps' + iSeqRow).bind('blur', function() { sc_form_tercero_te_eps_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tercero_te_eps_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_foto' + iSeqRow).bind('blur', function() { sc_form_tercero_te_foto_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tercero_te_foto_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_autoriza' + iSeqRow).bind('blur', function() { sc_form_tercero_te_autoriza_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tercero_te_autoriza_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_nombre_contacto' + iSeqRow).bind('blur', function() { sc_form_tercero_te_nombre_contacto_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_tercero_te_nombre_contacto_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_telefono_contacto' + iSeqRow).bind('blur', function() { sc_form_tercero_te_telefono_contacto_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_tercero_te_telefono_contacto_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_municipio_contacto' + iSeqRow).bind('blur', function() { sc_form_tercero_te_municipio_contacto_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_tercero_te_municipio_contacto_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_departamento_contacto' + iSeqRow).bind('blur', function() { sc_form_tercero_te_departamento_contacto_onblur(this, iSeqRow) })
                                                      .bind('change', function() { sc_form_tercero_te_departamento_contacto_onchange(this, iSeqRow) })
                                                      .bind('focus', function() { sc_form_tercero_te_departamento_contacto_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_direccion_contacto' + iSeqRow).bind('blur', function() { sc_form_tercero_te_direccion_contacto_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_tercero_te_direccion_contacto_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_parentesco_contacto' + iSeqRow).bind('blur', function() { sc_form_tercero_te_parentesco_contacto_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_tercero_te_parentesco_contacto_onfocus(this, iSeqRow) });
  $('#id_sc_field_te_antecedentes' + iSeqRow).bind('blur', function() { sc_form_tercero_te_antecedentes_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_tercero_te_antecedentes_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-te_autoriza' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_tercero_te_tidentificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_tidentificacion();
  scCssBlur(oThis);
}

function sc_form_tercero_te_tidentificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_identificacion();
  scCssBlur(oThis);
}

function sc_form_tercero_te_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_nombres_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_nombres();
  scCssBlur(oThis);
}

function sc_form_tercero_te_nombres_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_apellidos_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_apellidos();
  scCssBlur(oThis);
}

function sc_form_tercero_te_apellidos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_direccion();
  scCssBlur(oThis);
}

function sc_form_tercero_te_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_telefono();
  scCssBlur(oThis);
}

function sc_form_tercero_te_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_municipio_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_municipio();
  scCssBlur(oThis);
}

function sc_form_tercero_te_municipio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_departamento_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_departamento();
  scCssBlur(oThis);
}

function sc_form_tercero_te_departamento_onchange(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_refresh_te_departamento();
}

function sc_form_tercero_te_departamento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_gsangre_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_gsangre();
  scCssBlur(oThis);
}

function sc_form_tercero_te_gsangre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_rhsangre_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_rhsangre();
  scCssBlur(oThis);
}

function sc_form_tercero_te_rhsangre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_fnacimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_fnacimiento();
  scCssBlur(oThis);
}

function sc_form_tercero_te_fnacimiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_regimen_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_regimen();
  scCssBlur(oThis);
}

function sc_form_tercero_te_regimen_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_eps_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_eps();
  scCssBlur(oThis);
}

function sc_form_tercero_te_eps_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_foto_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_tercero_te_foto_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_tercero_te_autoriza_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_autoriza();
  scCssBlur(oThis);
}

function sc_form_tercero_te_autoriza_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_nombre_contacto_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_nombre_contacto();
  scCssBlur(oThis);
}

function sc_form_tercero_te_nombre_contacto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_telefono_contacto_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_telefono_contacto();
  scCssBlur(oThis);
}

function sc_form_tercero_te_telefono_contacto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_municipio_contacto_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_municipio_contacto();
  scCssBlur(oThis);
}

function sc_form_tercero_te_municipio_contacto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_departamento_contacto_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_departamento_contacto();
  scCssBlur(oThis);
}

function sc_form_tercero_te_departamento_contacto_onchange(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_refresh_te_departamento_contacto();
}

function sc_form_tercero_te_departamento_contacto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_direccion_contacto_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_direccion_contacto();
  scCssBlur(oThis);
}

function sc_form_tercero_te_direccion_contacto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_parentesco_contacto_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_parentesco_contacto();
  scCssBlur(oThis);
}

function sc_form_tercero_te_parentesco_contacto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tercero_te_antecedentes_onblur(oThis, iSeqRow) {
  do_ajax_form_tercero_mob_validate_te_antecedentes();
  scCssBlur(oThis);
}

function sc_form_tercero_te_antecedentes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
	if ("1" == block) {
		displayChange_block_1(status);
	}
	if ("2" == block) {
		displayChange_block_2(status);
	}
	if ("3" == block) {
		displayChange_block_3(status);
	}
	if ("4" == block) {
		displayChange_block_4(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("te_tidentificacion", "", status);
	displayChange_field("te_identificacion", "", status);
	displayChange_field("te_nombres", "", status);
	displayChange_field("te_apellidos", "", status);
	displayChange_field("te_direccion", "", status);
	displayChange_field("te_telefono", "", status);
	displayChange_field("te_departamento", "", status);
	displayChange_field("te_municipio", "", status);
	displayChange_field("te_gsangre", "", status);
	displayChange_field("te_rhsangre", "", status);
	displayChange_field("te_eps", "", status);
	displayChange_field("te_regimen", "", status);
	displayChange_field("te_fnacimiento", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("te_nombre_contacto", "", status);
	displayChange_field("te_telefono_contacto", "", status);
	displayChange_field("te_departamento_contacto", "", status);
	displayChange_field("te_municipio_contacto", "", status);
	displayChange_field("te_direccion_contacto", "", status);
	displayChange_field("te_parentesco_contacto", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("te_foto", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("te_antecedentes", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("te_autoriza", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_te_tidentificacion(row, status);
	displayChange_field_te_identificacion(row, status);
	displayChange_field_te_nombres(row, status);
	displayChange_field_te_apellidos(row, status);
	displayChange_field_te_direccion(row, status);
	displayChange_field_te_telefono(row, status);
	displayChange_field_te_departamento(row, status);
	displayChange_field_te_municipio(row, status);
	displayChange_field_te_gsangre(row, status);
	displayChange_field_te_rhsangre(row, status);
	displayChange_field_te_eps(row, status);
	displayChange_field_te_regimen(row, status);
	displayChange_field_te_fnacimiento(row, status);
	displayChange_field_te_nombre_contacto(row, status);
	displayChange_field_te_telefono_contacto(row, status);
	displayChange_field_te_departamento_contacto(row, status);
	displayChange_field_te_municipio_contacto(row, status);
	displayChange_field_te_direccion_contacto(row, status);
	displayChange_field_te_parentesco_contacto(row, status);
	displayChange_field_te_foto(row, status);
	displayChange_field_te_antecedentes(row, status);
	displayChange_field_te_autoriza(row, status);
}

function displayChange_field(field, row, status) {
	if ("te_tidentificacion" == field) {
		displayChange_field_te_tidentificacion(row, status);
	}
	if ("te_identificacion" == field) {
		displayChange_field_te_identificacion(row, status);
	}
	if ("te_nombres" == field) {
		displayChange_field_te_nombres(row, status);
	}
	if ("te_apellidos" == field) {
		displayChange_field_te_apellidos(row, status);
	}
	if ("te_direccion" == field) {
		displayChange_field_te_direccion(row, status);
	}
	if ("te_telefono" == field) {
		displayChange_field_te_telefono(row, status);
	}
	if ("te_departamento" == field) {
		displayChange_field_te_departamento(row, status);
	}
	if ("te_municipio" == field) {
		displayChange_field_te_municipio(row, status);
	}
	if ("te_gsangre" == field) {
		displayChange_field_te_gsangre(row, status);
	}
	if ("te_rhsangre" == field) {
		displayChange_field_te_rhsangre(row, status);
	}
	if ("te_eps" == field) {
		displayChange_field_te_eps(row, status);
	}
	if ("te_regimen" == field) {
		displayChange_field_te_regimen(row, status);
	}
	if ("te_fnacimiento" == field) {
		displayChange_field_te_fnacimiento(row, status);
	}
	if ("te_nombre_contacto" == field) {
		displayChange_field_te_nombre_contacto(row, status);
	}
	if ("te_telefono_contacto" == field) {
		displayChange_field_te_telefono_contacto(row, status);
	}
	if ("te_departamento_contacto" == field) {
		displayChange_field_te_departamento_contacto(row, status);
	}
	if ("te_municipio_contacto" == field) {
		displayChange_field_te_municipio_contacto(row, status);
	}
	if ("te_direccion_contacto" == field) {
		displayChange_field_te_direccion_contacto(row, status);
	}
	if ("te_parentesco_contacto" == field) {
		displayChange_field_te_parentesco_contacto(row, status);
	}
	if ("te_foto" == field) {
		displayChange_field_te_foto(row, status);
	}
	if ("te_antecedentes" == field) {
		displayChange_field_te_antecedentes(row, status);
	}
	if ("te_autoriza" == field) {
		displayChange_field_te_autoriza(row, status);
	}
}

function displayChange_field_te_tidentificacion(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_tidentificacion__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_tidentificacion" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_tidentificacion");
	}
}

function displayChange_field_te_identificacion(row, status) {
    var fieldId;
}

function displayChange_field_te_nombres(row, status) {
    var fieldId;
}

function displayChange_field_te_apellidos(row, status) {
    var fieldId;
}

function displayChange_field_te_direccion(row, status) {
    var fieldId;
}

function displayChange_field_te_telefono(row, status) {
    var fieldId;
}

function displayChange_field_te_departamento(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_departamento__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_departamento" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_departamento");
	}
}

function displayChange_field_te_municipio(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_municipio__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_municipio" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_municipio");
	}
}

function displayChange_field_te_gsangre(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_gsangre__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_gsangre" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_gsangre");
	}
}

function displayChange_field_te_rhsangre(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_rhsangre__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_rhsangre" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_rhsangre");
	}
}

function displayChange_field_te_eps(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_eps__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_eps" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_eps");
	}
}

function displayChange_field_te_regimen(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_regimen__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_regimen" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_regimen");
	}
}

function displayChange_field_te_fnacimiento(row, status) {
    var fieldId;
}

function displayChange_field_te_nombre_contacto(row, status) {
    var fieldId;
}

function displayChange_field_te_telefono_contacto(row, status) {
    var fieldId;
}

function displayChange_field_te_departamento_contacto(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_departamento_contacto__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_departamento_contacto" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_departamento_contacto");
	}
}

function displayChange_field_te_municipio_contacto(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_municipio_contacto__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_municipio_contacto" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_municipio_contacto");
	}
}

function displayChange_field_te_direccion_contacto(row, status) {
    var fieldId;
}

function displayChange_field_te_parentesco_contacto(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_parentesco_contacto__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_parentesco_contacto" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_parentesco_contacto");
	}
}

function displayChange_field_te_foto(row, status) {
    var fieldId;
}

function displayChange_field_te_antecedentes(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_te_antecedentes__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_te_antecedentes" + row).select2("destroy");
		}
		scJQSelect2Add(row, "te_antecedentes");
	}
}

function displayChange_field_te_autoriza(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_te_tidentificacion("all", "on");
	displayChange_field_te_departamento("all", "on");
	displayChange_field_te_municipio("all", "on");
	displayChange_field_te_gsangre("all", "on");
	displayChange_field_te_rhsangre("all", "on");
	displayChange_field_te_eps("all", "on");
	displayChange_field_te_regimen("all", "on");
	displayChange_field_te_departamento_contacto("all", "on");
	displayChange_field_te_municipio_contacto("all", "on");
	displayChange_field_te_parentesco_contacto("all", "on");
	displayChange_field_te_antecedentes("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_tercero_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(24);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_te_fnacimiento" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_te_fnacimiento" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      var elemName;
      if ("" != dateText) {
        elemName = $(this).attr("name");
        $("input[name=sc_clone_" + elemName + "]").hide();
        $("input[name=" + elemName + "]").show();
      }
      setTimeout(function() { do_ajax_form_tercero_mob_validate_te_fnacimiento(iSeqRow); }, 200);
    },
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("SU"); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("ddmmyyyy", "/"); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_te_foto" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_tercero_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'te_foto'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_te_foto" + iSeqRow);
        loaderContent = $("#id_img_loader_te_foto" + iSeqRow + " .scProgressBarLoading");
        loaderContent.html("&nbsp;");
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_te_foto" + iSeqRow);
        loader.show();
      }
    },
    change: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_te_foto(data);
      if ('ok' != checkUploadSize) {
        e.preventDefault();
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
    },
    drop: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_te_foto(data);
      if ('ok' != checkUploadSize) {
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_te_foto" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_te_foto" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_te_foto" + iSeqRow).val("");
      $("#id_sc_field_te_foto_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_te_foto_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_te_foto = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_te_foto) ? "none" : "";
      $("#id_ajax_img_te_foto" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_te_foto" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_te_foto) {
        document.F1.temp_out_te_foto.value = var_ajax_img_thumb;
        document.F1.temp_out1_te_foto.value = var_ajax_img_te_foto;
      }
      else if (document.F1.temp_out_te_foto) {
        document.F1.temp_out_te_foto.value = var_ajax_img_te_foto;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_te_foto" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_te_foto" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_te_foto" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_te_foto" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_tercero_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});

function scJQPasswordToggleAdd(seqRow) {
  $(".sc-ui-pwd-toggle-icon" + seqRow).on("click", function() {
    var fieldName = $(this).attr("id").substr(17), fieldObj = $("#id_sc_field_" + fieldName), fieldFA = $("#id_pwd_fa_" + fieldName);
    if ("text" == fieldObj.attr("type")) {
      fieldObj.attr("type", "password");
      fieldFA.attr("class", "fa fa-eye sc-ui-pwd-eye");
    } else {
      fieldObj.attr("type", "text");
      fieldFA.attr("class", "fa fa-eye-slash sc-ui-pwd-eye");
    }
  });
} // scJQPasswordToggleAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "te_tidentificacion" == specificField) {
    scJQSelect2Add_te_tidentificacion(seqRow);
  }
  if (null == specificField || "te_departamento" == specificField) {
    scJQSelect2Add_te_departamento(seqRow);
  }
  if (null == specificField || "te_municipio" == specificField) {
    scJQSelect2Add_te_municipio(seqRow);
  }
  if (null == specificField || "te_gsangre" == specificField) {
    scJQSelect2Add_te_gsangre(seqRow);
  }
  if (null == specificField || "te_rhsangre" == specificField) {
    scJQSelect2Add_te_rhsangre(seqRow);
  }
  if (null == specificField || "te_eps" == specificField) {
    scJQSelect2Add_te_eps(seqRow);
  }
  if (null == specificField || "te_regimen" == specificField) {
    scJQSelect2Add_te_regimen(seqRow);
  }
  if (null == specificField || "te_departamento_contacto" == specificField) {
    scJQSelect2Add_te_departamento_contacto(seqRow);
  }
  if (null == specificField || "te_municipio_contacto" == specificField) {
    scJQSelect2Add_te_municipio_contacto(seqRow);
  }
  if (null == specificField || "te_parentesco_contacto" == specificField) {
    scJQSelect2Add_te_parentesco_contacto(seqRow);
  }
  if (null == specificField || "te_antecedentes" == specificField) {
    scJQSelect2Add_te_antecedentes(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_te_tidentificacion(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_tidentificacion_obj" : "#id_sc_field_te_tidentificacion" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_tidentificacion_obj',
      dropdownCssClass: 'css_te_tidentificacion_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_departamento(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_departamento_obj" : "#id_sc_field_te_departamento" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_departamento_obj',
      dropdownCssClass: 'css_te_departamento_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_municipio(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_municipio_obj" : "#id_sc_field_te_municipio" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_municipio_obj',
      dropdownCssClass: 'css_te_municipio_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_gsangre(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_gsangre_obj" : "#id_sc_field_te_gsangre" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_gsangre_obj',
      dropdownCssClass: 'css_te_gsangre_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_rhsangre(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_rhsangre_obj" : "#id_sc_field_te_rhsangre" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_rhsangre_obj',
      dropdownCssClass: 'css_te_rhsangre_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_eps(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_eps_obj" : "#id_sc_field_te_eps" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_eps_obj',
      dropdownCssClass: 'css_te_eps_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_regimen(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_regimen_obj" : "#id_sc_field_te_regimen" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_regimen_obj',
      dropdownCssClass: 'css_te_regimen_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_departamento_contacto(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_departamento_contacto_obj" : "#id_sc_field_te_departamento_contacto" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_departamento_contacto_obj',
      dropdownCssClass: 'css_te_departamento_contacto_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_municipio_contacto(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_municipio_contacto_obj" : "#id_sc_field_te_municipio_contacto" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_municipio_contacto_obj',
      dropdownCssClass: 'css_te_municipio_contacto_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_parentesco_contacto(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_parentesco_contacto_obj" : "#id_sc_field_te_parentesco_contacto" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_parentesco_contacto_obj',
      dropdownCssClass: 'css_te_parentesco_contacto_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_te_antecedentes(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_te_antecedentes_obj" : "#id_sc_field_te_antecedentes" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_te_antecedentes_obj',
      dropdownCssClass: 'css_te_antecedentes_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_tidentificacion) { displayChange_field_te_tidentificacion(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_departamento) { displayChange_field_te_departamento(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_municipio) { displayChange_field_te_municipio(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_gsangre) { displayChange_field_te_gsangre(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_rhsangre) { displayChange_field_te_rhsangre(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_eps) { displayChange_field_te_eps(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_regimen) { displayChange_field_te_regimen(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_departamento_contacto) { displayChange_field_te_departamento_contacto(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_municipio_contacto) { displayChange_field_te_municipio_contacto(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_parentesco_contacto) { displayChange_field_te_parentesco_contacto(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_te_antecedentes) { displayChange_field_te_antecedentes(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}

function scCheckUploadExtensionSize_te_foto(thisField)
{
    if ("files" in thisField && thisField.files.length > 0) {
        thisFileExtension = scGetFileExtension(thisField.files[0].name);


        if (!["png", "jpg"].includes(thisFileExtension)) {
            return 'err_extension||' + thisFileExtension.toUpperCase();
        }
    }

    return 'ok';
}


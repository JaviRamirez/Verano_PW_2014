 
	 <div class="row">
	 	
	 	<div class="col-md-12">
	 		<hr>
	 		<p class="text-center">
	 			
	 			Clase programación web. <br><span class="glyphicon glyphicon-registration-mark"> </span> <?php echo date('Y'); ?>
	 			
	 		</p>
	 	</div>	
	 	
	 </div>

 </div> <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../source/jquery.fancybox.pack.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <!--<script src="../js/main.js"></script>-->
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    	//Status
    	$('#id_form_status').bootstrapValidator({
      fields:{//abre fields
        status: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The status is required and cannot be empty'
                    
                  }
              }
          }
      }
    });
   //fin status

   //autor
   $('#id_form_autor').bootstrapValidator({
      fields:{//abre fields
        nombre: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The status is required and cannot be empty'
                    
                  },
                  stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name de la posicion must be more than 6 and less than 30 characters long'
                    }
              }
          },
          apellidos: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The apellidos is required and cannot be empty'
                    }
                  }
                },
                email: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    }
                  }
                }
      }//fin de fields
    });
   //fin autor

    //Todos los forms
    $('.ifancyboX').fancybox({
         'width' : '75%',
         'height' : '75%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
     //fin de fancyboX

     //revista
     $('#id_form_revista').bootstrapValidator({
      fields:{//abre fields
        nombre: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The nombre is required and cannot be empty'
                    
                  },
                  stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The nombre must be more than 6 and less than 30 characters long'
                    }
              }
          },
          portada: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The portada is required and cannot be empty'
                    }
                  }
                },
                /*fecha: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The fecha is required and cannot be empty'
                    }
                  }
                },*/
                volumen: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The volumen is required and cannot be empty'
                    }
                  }
                },
                titulo: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The titulo is required and cannot be empty'
                    }
                  }
                },
                subtitulo: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The subtitulo is required and cannot be empty'
                    }
                  }
                },
                numero: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The numero is required and cannot be empty'
                    }
                  }
                },
                clave: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The clave is required and cannot be empty'
                    }
                  }
                },
                directorio: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The directorio is required and cannot be empty'
                    }
                  }
                },
                editorial: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The editorial is required and cannot be empty'
                    }
                  }
                }
      }//fin de fields
    });
     //fin de revista

     //datetimepicker revista
     $('#datetimepicker_revista').datetimepicker({
        language:'es'
    });
     //fin de datetimepicker revista

     //datepicker articulo
     $('#datetimepicker_articulo').datetimepicker({
        language:'es'
    });
     //fin de datepicker articulo

     //articulo
     $('#id_form_articulo').bootstrapValidator({
      fields:{//abre fields
        nombre: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The nombre is required and cannot be empty'
                    
                  },
                  stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The nombre must be more than 6 and less than 30 characters long'
                    }
              }
          },
          resumen: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The resumen is required and cannot be empty'
                    }
                  }
                },
                abstract: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The abstract is required and cannot be empty'
                    }
                  }
                },
                introduccion: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The introduccion is required and cannot be empty'
                    }
                  }
                },
                metodologia: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The metodologia is required and cannot be empty'
                    }
                  }
                },
                contenido: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The contenido is required and cannot be empty'
                    }
                  }
                },
                fecha_creacion: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The fecha de creacion is required and cannot be empty'
                    }
                  }
                },
                archivo_pdf: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The archivo PDF is required and cannot be empty'
                    }
                  }
                },
                conclusiones: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The conclusiones is required and cannot be empty'
                    }
                  }
                },
                agradecimientos: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The agradecimientos is required and cannot be empty'
                    }
                  }
                },
                referencias: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The referencias is required and cannot be empty'
                    }
                  }
                }
      }//fin de fields
    });
     //fin de articulo

     //Todos los forms
    $('#verCopa').fancybox({
         'width' : '75%',
         'height' : '75%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
     //fin de fancyboX


});
</script>

  </body>
</html>
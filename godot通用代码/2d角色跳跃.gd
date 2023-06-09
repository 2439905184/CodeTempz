extends KinematicBody2D


const gravity = 2000
const hspeed = 350
const jump_force = 800 

onready var velocity = Vector2.ZERO

var is_jumping = false

func _ready():

	pass
	
func _physics_process(delta):
	velocity = move_and_slide(velocity,Vector2.UP)
	if is_on_floor():
		is_jumping = false
		
func _input(event):
	if event.is_action_pressed("jump") and not is_jumping:
		velocity.y = -jump_force
		is_jumping = true
	pass
	
func _process(delta):
	var direction = Input.get_action_strength("d")-Input.get_action_strength("a")
	velocity.x = direction * hspeed
	velocity.y += gravity * delta
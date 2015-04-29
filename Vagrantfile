VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "chef/ubuntu-14.04"
  config.vm.box_check_update = false

  config.vm.provider "virtualbox" do |v|
    v.memory = 2048
    v.cpus = 2
  end

  config.vm.network "private_network", type: "dhcp"
  config.ssh.forward_agent = true

  # Apache
  config.vm.network :forwarded_port, guest: 443, host: 8443, host_ip: "127.0.0.1"
  config.vm.network :forwarded_port, guest: 80, host: 8080, host_ip: "127.0.0.1"

  # Mysql
  config.vm.network :forwarded_port, guest: 3308, host: 33080, host_ip: "127.0.0.1"

  # Provision script
  config.vm.provision "shell", path: "provision/development_lamp.sh"

end

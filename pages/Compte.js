import React, { useCallback, useEffect, useState } from "react";

import {
  StyleSheet,
  View,
  SafeAreaView,
  StatusBar,
  Text,
  TextInput,
  TouchableOpacity,
  Alert,
  ActivityIndicator,
  Image,
  ScrollView,
} from "react-native";

import {
  Entypo,
  AntDesign,
  FontAwesome5,
  FontAwesome,
  SimpleLineIcons,
  Ionicons,
  Feather,
} from "@expo/vector-icons";

import Header from "../components/Header";

import * as SplashScreen from "expo-splash-screen";
import * as Font from "expo-font";

SplashScreen.preventAutoHideAsync();

import {
  useFonts,
  Outfit_100Thin,
  Outfit_200ExtraLight,
  Outfit_300Light,
  Outfit_400Regular,
  Outfit_500Medium,
  Outfit_600SemiBold,
  Outfit_700Bold,
  Outfit_800ExtraBold,
  Outfit_900Black,
} from "@expo-google-fonts/outfit";

export default function Login({ navigation, route }) {
  let [fontsLoaded] = useFonts({
    Outfit_100Thin,
    Outfit_200ExtraLight,
    Outfit_300Light,
    Outfit_400Regular,
    Outfit_500Medium,
    Outfit_600SemiBold,
    Outfit_700Bold,
    Outfit_800ExtraBold,
    Outfit_900Black,
  });

  let user = route.params.params_user;

  const [appIsReady, setAppIsReady] = useState(false);
  const [loading, setLoading] = useState(false);

  const [users, setUsers] = useState([]);

  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const [passwordVisible, setPasswordVisible] = useState(true);
  const [passwordType, setPasswordType] = useState("eye-slash");

  useEffect(() => {
    async function prepare() {
      try {
        await SplashScreen.preventAutoHideAsync();
        await Font.loadAsync(Entypo.font);
        await new Promise((resolve) => setTimeout(resolve, 200));
      } catch (e) {
        console.warn(e);
      } finally {
        setAppIsReady(true);
      }
    }

    prepare();
  }, []);

  const onLayoutRootView = useCallback(async () => {
    if (appIsReady) {
      await SplashScreen.hideAsync();
    }
  }, [appIsReady]);

  if (!appIsReady) {
    return null;
  }

  return (
    <SafeAreaView style={styles.main_container} onLayout={onLayoutRootView}>
      <View style={styles.container} onLayout={onLayoutRootView}>
        <StatusBar
          backgroundColor={"#f29304"}
          barStyle={"light-content"}
        ></StatusBar>

        <Header navigation={navigation} route={route} user={user.avatar} />

        <ScrollView
          style={{ width: "100%", paddingHorizontal: 15 }}
          showsVerticalScrollIndicator={false}
        >
          {/* <View>
            <Text
              style={{
                fontFamily: "Outfit_700Bold",
                color: "white",
                fontSize: 25,
                marginTop: 5,
              }}
            >
              Mon compte
            </Text>
          </View> */}

          <TouchableOpacity
            style={{
              marginTop: 30,
              width: "100%",
              borderWidth: 1,
              borderColor: "silver",
              justifyContent: "center",
              alignItems: "center",
              borderRadius: 10,
              padding: 20,
            }}
            onPress={() => {
              navigation.navigate("profil", {
                user: user,
              });
            }}
          >
            <Feather name="user" size={45} color="white" />
            <Text
              style={{
                fontFamily: "Outfit_500Medium",
                color: "white",
                width: "100%",
                fontSize: 18,
                textAlign: "center",
                marginTop: 10,
              }}
            >
              Informations personnelles
            </Text>
          </TouchableOpacity>

          <TouchableOpacity
            style={{
              marginTop: 30,
              width: "100%",
              borderWidth: 1,
              borderColor: "silver",
              justifyContent: "center",
              alignItems: "center",
              borderRadius: 10,
              padding: 20,
            }}
          >
            <FontAwesome name="money" size={45} color="white" />
            <Text
              style={{
                fontFamily: "Outfit_500Medium",
                color: "white",
                width: "100%",
                fontSize: 18,
                textAlign: "center",
                marginTop: 10,
              }}
            >
              Mes abonnements
            </Text>
          </TouchableOpacity>
          <TouchableOpacity
            style={{
              marginTop: 30,
              width: "100%",
              borderWidth: 1,
              borderColor: "silver",
              justifyContent: "center",
              alignItems: "center",
              borderRadius: 10,
              padding: 20,
            }}
          >
            <AntDesign name="setting" size={45} color="white" />
            <Text
              style={{
                fontFamily: "Outfit_500Medium",
                color: "white",
                width: "100%",
                fontSize: 18,
                textAlign: "center",
                marginTop: 10,
              }}
            >
              Paramètrage
            </Text>
          </TouchableOpacity>
        </ScrollView>
      </View>
      {loading ? (
        <View
          style={{
            position: "absolute",
            top: 0,
            left: 0,
            right: 0,
            bottom: 0,
            backgroundColor: "rgba(255,255,255,0.4)",
            paddingHorizontal: 10,
            justifyContent: "center",
            alignItems: "center",
          }}
        >
          <ActivityIndicator size="large" color="#000" />
        </View>
      ) : null}
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  main_container: {
    flex: 1,
    backgroundColor: "#212429",
  },
  container: {
    flex: 1,
    backgroundColor: "#212429",
  },
});
